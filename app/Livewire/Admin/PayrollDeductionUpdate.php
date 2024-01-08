<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PayrollDeductionForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Gps;
use App\Models\Insurance;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;

class PayrollDeductionUpdate extends Modal
{
    public PayrollDeductionForm $form;
    public $payroll;
    public $categories;
    public $insurances;
    public $loans;
    public $gps;


    public function mount($deduction)
    {
        $this->form->setDeduction($deduction);
        $this->categories = Category::where('key','=','deductions')->first()->categories()->get();
        $this->insurances = Insurance::where('company_id', $this->payroll->contract_id)->get();
        $this->loans = Loan::where('company_id',$this->payroll->contract_id)->get();
        $this->gps = Gps::where('company_id',$this->payroll->contract_id)->get();
        $this->form->payroll = $this->payroll;
        $this->form->user_id = Auth::id();
        
    }

    public function updated($property)
    {
        if ($property == 'form.category_id') {
            $this->form->category = Category::find($this->form->category_id)->key??'';
        }
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('deduction-updated');

    }

    public function render()
    {
        return view('livewire.admin.payroll-deduction-update');
    }

}
