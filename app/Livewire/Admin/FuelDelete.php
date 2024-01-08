<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class FuelDelete extends Modal
{
    public $fuel;

    public function delete()
    {
        $this->fuel->delete();

        $this->redirect('/admin/fuels');
    }

    public function render()
    {
        return view('livewire.admin.fuel-delete');
    }
}
