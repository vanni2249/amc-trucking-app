<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollFuelsBalance extends Component
{
    public $payroll;

    #[On('payroll-fuels-attached')]
    #[On('payroll-fuel-detached')]
    public function render()
    {
        return view('livewire.admin.payroll-fuels-balance');
    }
}
