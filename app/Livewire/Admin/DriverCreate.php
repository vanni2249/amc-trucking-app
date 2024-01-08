<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\DriverForm;
use App\Livewire\Partials\Modal;

class DriverCreate extends Modal
{
    public DriverForm $form;

    public function mount()
    {
        $this->form->is_actived = true;
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('driver-created');
    }

    public function render()
    {
        return view('livewire.admin.driver-create');
    }
}
