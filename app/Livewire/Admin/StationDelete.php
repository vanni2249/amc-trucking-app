<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class StationDelete extends Modal
{
    public $station;

    public function delete()
    {
        $this->station->delete();
        
        $this->redirect('/admin/stations');
    }

    public function render()
    {
        return view('livewire.admin.station-delete');
    }
}
