<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use App\Models\Category;
use Livewire\Attributes\On;

class CategoryDelete extends Modal
{
    public $category;

    #[On('category-delete-modal')]
    public function show($category)
    {
        $this->show = true;
        $this->category = Category::find($category['id']);
    }

    #[On('category-updated')]
    public function render()
    {
        return view('livewire.admin.category-delete');
    }


    public function delete()
    {
        if ($this->category->category_id) {
            $this->category->delete();
            $this->dispatch('category-updated');
            $this->show = false;
        } else {
            $this->category->delete();
            $this->redirect('/admin/categories');
        }
        
    }
}
