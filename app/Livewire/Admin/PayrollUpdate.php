<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PayrollForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use App\Models\Payroll;
use Illuminate\Support\Facades\Auth;

class PayrollUpdate extends Modal
{
    public PayrollForm $form;
    public $contracts;



    public function mount(Payroll $payroll)
    {
        $this->form->setPayroll($payroll);
        $this->contracts = Company::where('category_id',5)->get();
        $this->form->user_id = Auth::id();

    }
    public function render()
    {
        return view('livewire.admin.payroll-update');
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('payroll-updated');
 
    }

}
