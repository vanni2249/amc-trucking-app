<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class InsuranceDelete extends Modal
{
    public $insurance;

    public function render()
    {
        return view('livewire.admin.insurance-delete');
    }

    public function delete()
    {
        $this->insurance->delete();

        $this->redirect('/admin/insurances');
    }
}
