<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Filters extends Component
{
    public $search;
    public $paginate;

    public function mount() 
    {
        $this->paginate = 10;    
    }

}
