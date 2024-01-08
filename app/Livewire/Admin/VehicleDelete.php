<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class VehicleDelete extends Modal
{
    public $vehicle;

    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function delete()
    {
        $this->vehicle->delete();
        $this->redirect('/admin/vehicles'); 
    }
    
    public function render()
    {
        return view('livewire.admin.vehicle-delete');
    }
}
