<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class StateDelete extends Modal
{
    public $state;

    public function delete()
    {
        $this->state->delete();
        
        $this->redirect('/admin/states');
    }

    public function render()
    {
        return view('livewire.admin.state-delete');
    }
}
