<?php

namespace App\Livewire\Admin;

use App\Models\Card;
use Livewire\Component;
use Livewire\WithPagination;

class Cards extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.admin.cards',[
            'cards' => Card::where('is_actived',true)->paginate()
        ]);
    }
}
