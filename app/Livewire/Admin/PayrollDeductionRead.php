<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollDeductionRead extends Component
{
    public $payroll;
    public $deduction;
    

    #[On('deduction-updated')]
    public function render()
    {
        return view('livewire.admin.payroll-deduction-read');
    }
}
