<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\StationForm;
use App\Livewire\Partials\Modal;

class StationUpdate extends Modal
{
    public StationForm $form;

    public function mount($station)
    {
        $this->form->setStation($station);
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('station-updated');

    }

    public function render()
    {
        return view('livewire.admin.station-update');
    }
}
