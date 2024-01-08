<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CompanyForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Company;

class CompanyUpdate extends Modal
{
    public CompanyForm $form;

    public $categories;

    public function mount(Company $company)
    {
        $this->form->setCompany($company);
        $this->categories = Category::where('key', '=', 'companies')->first()->categories()->get();
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('company-updated');
    }

    public function render()
    {
        return view('livewire.admin.company-update');
    }
}
