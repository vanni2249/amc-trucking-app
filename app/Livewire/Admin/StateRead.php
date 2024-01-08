<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class StateRead extends Component
{
    public $state;
    
    #[On('state-updated')]
    public function render()
    {
        return view('livewire.admin.state-read');
    }
}
