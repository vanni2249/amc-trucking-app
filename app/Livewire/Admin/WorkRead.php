<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class WorkRead extends Component
{
    public $work;
    
    #[On('work-updated')]
    public function render()
    {
        return view('livewire.admin.work-read');
    }
}
