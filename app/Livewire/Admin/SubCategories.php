<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use Livewire\Attributes\On;

class SubCategories extends Modal
{
    public $category;

    #[On('sub-category-created')]
    #[On('sub-category-updated')]
    public function render()
    {
        return view('livewire.admin.sub-categories',[
            'categories' => $this->category->categories()->get()
        ]);
    }
}
