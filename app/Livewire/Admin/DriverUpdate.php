<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\DriverForm;
use App\Livewire\Partials\Modal;
use App\Models\Driver;

class DriverUpdate extends Modal
{
    public DriverForm $form;

    public function mount(Driver $driver) {
        $this->form->setDriver($driver);
    }

    public function save()
    {
        $this->form->update();
        
        $this->show = false;
        
        $this->dispatch('driver-updated');
    }

    public function render()
    {
        return view('livewire.admin.driver-update');
    }

}
