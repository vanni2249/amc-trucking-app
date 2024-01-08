<?php

namespace App\Livewire\Forms;

use App\Models\Insurance;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InsuranceCompanyForm extends Form
{
    public ?Insurance $insurance;

    #[Validate('required')]
    public $insurance_id;

    #[Validate('required')]
    public $company_id;

    #[Validate('required|numeric|decimal:2')]
    public $amount;

    public $user_id;

    public function setInsuranceCompany($insurance)
    {
        $this->insurance = $insurance;
        $this->insurance_id = $insurance->insurance_id;
        $this->company_id = $insurance->company_id;
        $this->amount = $insurance->amount;
        $this->user_id = $insurance->user_id;
    }

    public function store()
    {
        $this->validate();

        $this->insurance->create($this->all());

        $this->reset('company_id','amount');
    }

    public function update()
    {
        $this->validate();

        $this->insurance->update($this->all());
    }
}
