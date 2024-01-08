<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\VehicleForm;
use App\Livewire\Partials\Modal;

class VehicleCreate extends Modal
{
    public VehicleForm $form;

    public function mount()
    {
        $this->form->is_actived = true;
    }

    public function save()
    {
        $this->form->store();

        $this->dispatch('vehicle-created');

        $this->show = false;
    }

    public function render()
    {
        return view('livewire.admin.vehicle-create');
    }
}
