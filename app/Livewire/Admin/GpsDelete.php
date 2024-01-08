<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class GpsDelete extends Modal
{
    public $gps;

    public function delete()
    {
        $this->gps->delete();

        $this->redirect('/admin/gps');
    }

    public function render()
    {
        return view('livewire.admin.gps-delete');
    }
}
