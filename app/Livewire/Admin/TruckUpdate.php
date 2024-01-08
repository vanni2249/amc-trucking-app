<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\TruckForm;
use App\Livewire\Partials\Modal;
use App\Models\Truck;

class TruckUpdate extends Modal
{
   public TruckForm $form;

    public function mount(Truck $truck)
    {
        $this->form->setTruck($truck);
    }
    
    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('truck-updated');
    }
    
    public function render()
    {
        return view('livewire.admin.truck-update');
    }

}
