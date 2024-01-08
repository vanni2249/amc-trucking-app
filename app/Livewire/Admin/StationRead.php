<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class StationRead extends Component
{
    public $station;
    
    #[On('station-updated')]
    public function render()
    {
        return view('livewire.admin.station-read');
    }
}
