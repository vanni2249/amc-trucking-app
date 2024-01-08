<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InsuranceCompanyForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use App\Models\Insurance;
use Livewire\Attributes\Validate;

class InsuranceCompanyUpdate extends Modal
{
    public InsuranceCompanyForm $form;
    public $insurance;
    public $companies;


    public function mount($insurance, $company)
    {
        $this->insurance = Insurance::where('insurance_id', $insurance->id)->where('company_id',$company->id)->get()->first();
        $this->form->setInsuranceCompany($this->insurance);
        $this->companies = Company::whereRelation('category','key','=','sub_contract')->get();

    }
    public function save() 
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('insurance-insurance-updated');
    }
    
    public function render()
    {
        return view('livewire.admin.insurance-company-update');
    }

}
