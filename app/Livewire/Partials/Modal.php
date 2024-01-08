<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    public function open()
    {
        $this->show = true;
    }
    
    public function close()
    {
        $this->show = false;

    }
}
