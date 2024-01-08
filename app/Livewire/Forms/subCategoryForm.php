<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Form;

class subCategoryForm extends Form
{
    public ?Category $category;

    #[Validate('required')]
    public $name;

    public $key;

    public $category_id;
    

    public function setSubCategory(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->key = $category->key;
        $this->category_id = $category->category_id;
    }

    public function store()
    {
        $this->validate();
        
        $this->category->category()->create($this->all());

        $this->reset('name');
    }

    public function update()
    {
        $this->validate();

        $this->category->update($this->all());
    }
}
