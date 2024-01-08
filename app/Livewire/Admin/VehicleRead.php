<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class VehicleRead extends Component
{
    public $vehicle;
    
    #[On('vehicle-updated')]
    public function render()
    {
        return view('livewire.admin.vehicle-read');
    }
}
