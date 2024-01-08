<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\StationForm;
use App\Livewire\Partials\Modal;

class StationCreate extends Modal
{
    public StationForm $form;

    public function mount()
    {
        $this->form->is_actived = true;
    }

    public function render()
    {
        return view('livewire.admin.station-create');
    }

    public function save()
    {
        $this->form->store();

        $this->dispatch('station-created');

        $this->show = false;
    }
}
