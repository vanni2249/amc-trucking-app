<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\VehicleForm;
use App\Livewire\Partials\Modal;
use App\Models\Vehicle;

class VehicleUpdate extends Modal
{
    public VehicleForm $form;

    public function mount(Vehicle $vehicle)
    {
        $this->form->setVehicle($vehicle);
    }
    
    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('vehicle-updated');
    }

    public function render()
    {
        return view('livewire.admin.vehicle-update');
    }
}
