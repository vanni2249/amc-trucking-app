<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\TruckForm;
use App\Livewire\Partials\Modal;

class TruckCreate extends Modal
{
   public TruckForm $form;
    
    public function mount()
    {
        $this->form->is_actived = true;
    }

    public function render()
    {
        return view('livewire.admin.truck-create');
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('truck-created');
    }
}
