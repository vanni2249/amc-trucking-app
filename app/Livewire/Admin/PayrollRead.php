<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollRead extends Component
{
    public $payroll;

    #[On('payroll-updated')]
    #[On('deduction-created')]
    #[On('payroll-work-attached')]
    #[On('payroll-work-detached')]
    public function render()
    {
        return view('livewire.admin.payroll-read');
    }
}
