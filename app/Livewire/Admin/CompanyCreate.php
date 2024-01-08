<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CompanyForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;

class CompanyCreate extends Modal
{
    public CompanyForm $form;

    public $categories;

    public function mount()
    {
        $this->categories = Category::where('key', '=', 'companies')->first()->categories()->get();
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('company-created');
    }

    public function render()
    {
        return view('livewire.admin.company-create');
    }
}
