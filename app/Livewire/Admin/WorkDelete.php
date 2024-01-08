<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class WorkDelete extends Modal
{
    public $work;

    public function mount($work){
        $this->work = $work;
    }

    public function render()
    {
        return view('livewire.admin.work-delete');
    }

    public function delete()
    {
        $this->work->delete();
        $this->redirect('/admin/works'); 
    }
}
