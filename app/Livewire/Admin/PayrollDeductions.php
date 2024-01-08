<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollDeductions extends Component
{
    public $payroll;

    #[On('deduction-created')]
    public function render()
    {
        return view('livewire.admin.payroll-deductions',[
            'deductions' => $this->payroll->deductions()->orderBy('category_id','asc')->get()
        ]);
    }
}
