<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class FuelRead extends Component
{
    public $fuel;
    
    #[On('fuel-updated')]
    public function render()
    {
        return view('livewire.admin.fuel-read');
    }
}
