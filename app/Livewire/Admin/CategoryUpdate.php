<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CategoryForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryUpdate extends Modal
{
    public CategoryForm $form;
    
    public function mount(Category $category)
    {
        $this->form->setCategory($category);
    }

    public function updated()
    {
        $this->form->key = Str::lower(Str::snake($this->form->name));
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('category-updated');
    }

    public function render()
    {
        return view('livewire.admin.category-update');
    }

}
