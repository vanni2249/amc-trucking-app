<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\subCategoryForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use Illuminate\Support\Str;

class SubCategoryCreate extends Modal
{
    public subCategoryForm $form;
    public $category;

    public function mount(Category $category)
    {
        $this->form->category = $category;
        $this->form->category_id = $category->id;
    }

    public function updated()
    {
        $this->form->key = Str::lower(Str::snake($this->form->name));
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('sub-category-created');
    }

    public function render()
    {
        return view('livewire.admin.sub-category-create');
    }
}
