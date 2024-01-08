<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class CardRead extends Component
{
    public $card;
    
    #[On('card-updated')]
    public function render()
    {
        return view('livewire.admin.card-read');
    }
}
