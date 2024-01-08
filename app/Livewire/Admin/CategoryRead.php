<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class CategoryRead extends Component
{
    public $category;
    
    #[On('category-updated')]
    public function render()
    {
        return view('livewire.admin.category-read');
    }
}
