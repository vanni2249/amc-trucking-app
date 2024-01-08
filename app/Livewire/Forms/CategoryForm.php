<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category;

    #[Validate('required|min:4')]
    public $name;

    public $key;

    public function setCategory(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->key = $category->key;
    }

    public function store()
    {
        $this->validate();

        return Category::create($this->all());

        $this->reset('name');
    }

    public function update()
    {
        $this->validate();

        $this->category->update($this->all());
    }
}
