<?php

namespace App\Livewire\Admin;

use App\Models\Fuel;
use App\Models\Invoice;
use App\Models\Payroll;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Number;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public $ty;
    public $year;
    public $works_count;
    public $works_sum;
    public $invoices_count;
    public $invoices_works_sum;
    public $payrolls_count;
    public $payrolls_works_sum;
    public $fuels_sum;
    public $fuels_count;

    public function mount()
    {
        $this->ty = Carbon::now()->year; 
        $this->year = $this->ty;
        $this->data();
    }

    #[On('year-updated')]
    public function updated($year)
    {
        $this->year = $year;
        $this->data();
    }
    
    public function works($limit = false)
    {
        return Work::whereYear('completed_at', $this->year)->when($limit,function($query){
            $query->limit(5)->orderBy('completed_at','desc');
        })->get();
    }
    public function invoices($limit = false)
    {
        return Invoice::whereYear('completed_at', $this->year)->when($limit,function($query){
            $query->limit(5)->orderBy('paid_at','desc');
        })->get();
    }

    public function payrolls($limit = false)
    {
        return Payroll::whereYear('paid_at',$this->year)->when($limit,function($query){
            $query->limit(5)->orderBy('paid_at','desc');
        })->get();
    }

    public function fuels($limit = false)
    {
        return Fuel::whereYear('made_at',$this->year)->when($limit,function($query){
            $query->limit(5)->orderBy('made_at','desc');
        })->get();
    }
    
    public function invoices_works()
    {
        return Work::whereHas('invoices',function($query){
            $query->whereYear('paid_at', $this->year);
        })->get();
    }

    public function payrolls_works()
    {
        return Work::whereHas('payrolls', function($query){
            $query->whereYear('paid_at',$this->year);
        })->get();
    }

    public function data()
    {
        $this->works_count = $this->works()->count();
        $this->works_sum = Number::currency($this->works()->sum('amount'));
        $this->invoices_works_sum = Number::currency($this->invoices_works()->sum('amount'));
        $this->invoices_count = $this->invoices()->count();
        $this->payrolls_count = $this->payrolls()->count();
        $this->payrolls_works_sum = Number::currency($this->payrolls_works()->sum('amount'));
        $this->fuels_count = $this->fuels()->count();
        $this->fuels_sum = Number::currency($this->fuels()->sum('amount'));
    }

    public function thisYearWorks()
    {
        return Work::query()
                ->whereYear('completed_at',2023)
                ->selectRaw('month(completed_at) as month')
                // ->selectRaw('sum(amount) as amount')
                ->selectRaw('sum(amount) as amount')
                ->groupBy('month')
                ->orderBy('month')
                ->pluck('month','amount')
                ->values()
                ->toArray();
    }

    public function render()
    {
        return view('livewire.admin.dashboard',[
            'works' => $this->works(true),
            'invoices' => $this->invoices(true),
            'payrolls' => $this->payrolls(true),
            'fuels' => $this->fuels(true),
            'thisYearWorks' => $this->thisYearWorks(),
        ]);
    }


}
