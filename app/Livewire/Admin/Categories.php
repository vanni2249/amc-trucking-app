<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    
    #[On('category-updated')]
    public function render()
    {
        return view('livewire.admin.categories',[
            'categories' => Category::where('category_id',null)->paginate(15)
        ]);
    }
    
}
