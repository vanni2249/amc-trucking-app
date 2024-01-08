<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\StateForm;
use App\Livewire\Partials\Modal;

class StateCreate extends Modal
{
    public StateForm $form;

    public function mount()
    {
        $this->form->is_actived = true;
    }

    public function save()
    {
        $this->form->store();

        $this->dispatch('state-created');

        $this->show = false;
    }
    
    public function render()
    {
        return view('livewire.admin.state-create');
    }

}
