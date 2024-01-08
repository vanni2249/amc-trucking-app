<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\StateForm;
use App\Livewire\Partials\Modal;

class StateUpdate extends Modal
{
    public StateForm $form;

    public function mount($state)
    {
        $this->form->setState($state);
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('state-updated');

    }

    public function render()
    {
        return view('livewire.admin.state-update');
    }
}
