<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollWorksBalance extends Component
{
    public $payroll;

    #[On('payroll-works-attached')]
    #[On('payroll-work-detached')]
    public function render()
    {
        return view('livewire.admin.payroll-works-balance');
    }
}
