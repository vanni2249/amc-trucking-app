<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class GpsRead extends Component
{
    public $gps;
    
    #[On('gps-updated')]
    public function render()
    {
        return view('livewire.admin.gps-read');
    }
}
