<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InsuranceCompanyForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use App\Models\Insurance;
use Illuminate\Support\Facades\Auth;

class InsuranceCompanyCreate extends Modal
{
    public InsuranceCompanyForm $form;

    public $insurance;
    public $companies;

    public function mount(Insurance $insurance)
    {
        $this->companies = Company::whereRelation('category','key','=','sub_contract')->get();
        $this->form->insurance = $insurance;
        $this->form->insurance_id = $insurance->id;
        $this->form->user_id = Auth::id();
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('insurance-insurance-created');

    }

    public function render()
    {
        return view('livewire.admin.insurance-company-create');
    }

}
