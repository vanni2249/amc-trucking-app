<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollDeductionsBalance extends Component
{
    public $payroll;

    #[On('deduction-created')]
    public function render()
    {
        return view('livewire.admin.payroll-deductions-balance');
    }
}
