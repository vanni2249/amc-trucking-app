<?php

namespace App\Livewire\Client;

use App\Models\Payroll;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Payrolls extends Component
{
    use WithPagination;

    public $payrolls;
    public $company_id;

    public function mount()
    {
        $this->company_id = User::find(Auth::id())->companies()->first()->id;
        $this->payrolls = Payroll::where('contract_id',$this->company_id)
                                    ->where('view_at','<',now())    
                                    ->paginate(5);
    }

    public function render()
    {
        return view('livewire.client.payrolls');
    }
}
