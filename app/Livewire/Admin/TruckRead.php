<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class TruckRead extends Component
{
    public $truck;

    public function mount($truck)
    {
        $this->truck = $truck;
    }

    #[On('truck-updated')]
    public function render()
    {
        return view('livewire.admin.truck-read');
    }
}
