<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class PayrollDeductionDelete extends Modal
{
    public $payroll;
    public $deduction;

    public function render()
    {
        return view('livewire.admin.payroll-deduction-delete');
    }

    public function delete()
    {
        $this->deduction->delete();

        $this->redirect('/admin/payrolls/'.$this->payroll->id);
    }


}
