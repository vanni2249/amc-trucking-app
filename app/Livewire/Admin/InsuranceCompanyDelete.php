<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use App\Models\Insurance;

class InsuranceCompanyDelete extends Modal
{
    public $insurance;

    public function mount($insurance, $company)
    {
        $this->insurance = Insurance::where('insurance_id', $insurance->id)->where('company_id',$company->id)->get()->first();

    }

    public function delete()
    {
        $this->insurance->delete();

        $this->show = false;

        $this->redirect('/admin/insurances/'.$this->insurance->insurance_id.'/companies');

    }

    public function render()
    {
        return view('livewire.admin.insurance-company-delete');
    }

}
