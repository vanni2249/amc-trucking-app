<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\GpsForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class GpsCreate extends Modal
{
    public GpsForm $form;

    public $companies;
    
    public function mount()
    {
        $this->companies = Company::whereRelation('category', 'key', '=', 'gps')->get();
        $this->form->user_id = Auth::id();
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('gps-created');
    }

    public function render()
    {
        return view('livewire.admin.gps-create');
    }
}
