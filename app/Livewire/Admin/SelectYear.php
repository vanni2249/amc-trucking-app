<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;

class SelectYear extends Component
{
    public $ty;
    public $year;

    public function mount()
    {
        $this->ty = Carbon::now()->year; 
        $this->year = $this->ty;
    }

    public function updated()
    {
        $this->dispatch('year-updated', year:$this->year);
    }
    
    public function render()
    {
        return view('livewire.admin.select-year');
    }
}
