<?php

namespace App\Livewire\Forms;

use App\Models\Company;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CompanyForm extends Form
{
    public ?Company $company;

    #[Validate('required|min:5')]
    public $name;

    #[Validate('required')]
    public $category_id;

    public function setCompany($company)
    {
        $this->company = $company;
        $this->name = $company->name;
        $this->category_id = $company->category_id;
    }

    public function store()
    {
        $this->validate();

        Company::create($this->all());

        $this->reset('name','category_id');
    }
    public function update()
    {
        $this->validate();

        $this->company->update($this->all());
    }
}
