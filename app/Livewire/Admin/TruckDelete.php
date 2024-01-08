<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use Livewire\Component;

class TruckDelete extends Modal
{
    public $truck;

    public function mount($truck)
    {
        $this->truck = $truck;
    }

    public function delete()
    {
        $this->truck->delete();
        $this->redirect('/admin/trucks'); 
    }
    
    public function render()
    {
        return view('livewire.admin.truck-delete');
    }

}
