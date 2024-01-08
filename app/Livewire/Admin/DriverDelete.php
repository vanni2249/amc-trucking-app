<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use Livewire\Component;

class DriverDelete extends Modal
{
    public $driver;

    public function mount($driver){
        $this->driver = $driver;
    }

    public function render()
    {
        return view('livewire.admin.driver-delete');
    }

    public function delete()
    {
        $this->driver->delete();
        $this->redirect('/admin/drivers'); 
    }
}
