<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\subCategoryForm;
use App\Livewire\Partials\Modal;
use Illuminate\Support\Str;

class SubCategoryUpdate extends Modal
{
    public subCategoryForm $form;

    public function mount($category)
    {
        $this->form->setSubCategory($category);
    }

    public function updated()
    {
        $this->form->key = Str::lower(Str::snake($this->form->name));
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('sub-category-updated');
    }

    public function render()
    {
        return view('livewire.admin.sub-category-update');
    }
}
