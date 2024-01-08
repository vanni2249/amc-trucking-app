<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CategoryForm;
use App\Livewire\Partials\Modal;
use Illuminate\Support\Str;

class CategoryCreate extends Modal
{
    public CategoryForm $form;

    public function updated()
    {
        $this->form->key = Str::lower(Str::snake($this->form->name));
    }

    public function save()
    {
        $category = $this->form->store();

        $this->redirect('/admin/categories/' . $category->id);
    }

    public function render()
    {
        return view('livewire.admin.category-create');
    }
}
