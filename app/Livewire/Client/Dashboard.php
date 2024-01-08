<?php

namespace App\Livewire\Client;

use App\Models\Fuel;
use App\Models\Payroll;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Number;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Charts\SampleChart;
use App\Models\Company;

class Dashboard extends Component
{
    public $ty;
    public $year;
    public $works_count;
    public $works_sum;
    public $payrolls_count;
    public $payrolls_works_sum;
    public $fuels_sum;
    public $fuels_count;
    public $user_id;
    public $sub_contract_id;

    public $chart;

    public function mount()
    {
        $this->ty = Carbon::now()->year;
        $this->year = $this->ty;
        $this->user_id = Auth::id();
        $this->sub_contract_id = Auth::user()->company->id;
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
        return Work::whereYear('completed_at', $this->year)->where('sub_contract_id', $this->sub_contract_id)->when($limit, function ($query) {
            $query->limit(5)->orderBy('completed_at', 'desc');
        })->get();
    }

    public function payrolls($limit = false)
    {
        return Payroll::whereYear('paid_at', $this->year)->where('contract_id', $this->sub_contract_id)->when($limit, function ($query) {
            $query->limit(5)->orderBy('paid_at', 'desc');
        })->get();
    }

    public function fuels($limit = false)
    {
        return Fuel::whereYear('made_at', $this->year)->where('company_id', $this->sub_contract_id)->when($limit, function ($query) {
            $query->limit(5)->orderBy('made_at', 'desc');
        })->get();
    }

    public function payrolls_works()
    {
        return Work::where('sub_contract_id', $this->sub_contract_id)->whereHas('payrolls', function ($query) {
            $query->whereYear('paid_at', $this->year);
        })->get();
    }

    public function data()
    {
        $this->works_count = $this->works()->count();
        $this->works_sum = Number::currency($this->works()->sum('amount'));
        $this->payrolls_count = $this->payrolls()->count();
        $this->payrolls_works_sum = Number::currency($this->payrolls_works()->sum('amount'));
        $this->fuels_count = $this->fuels()->count();
        $this->fuels_sum = Number::currency($this->fuels()->sum('amount'));
    }

    public function render()
    {
        return view('livewire.client.dashboard');
    }
}
