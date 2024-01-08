<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class DriverRead extends Component
{
    public $driver;

    public function mount($driver){
        $this->driver = $driver;
    }

    #[On('driver-updated')]
    public function render()
    {
        return view('livewire.admin.driver-read');
    }
}
