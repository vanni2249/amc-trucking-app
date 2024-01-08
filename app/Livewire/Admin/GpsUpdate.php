<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\GpsForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GpsUpdate extends Modal
{
    public GpsForm $form;

    public $companies;
    
    public function mount($gps)
    {
        $this->form->setGps($gps);
        $this->companies = Company::whereRelation('category', 'key', '=', 'gps')->get();
        $this->form->user_id = Auth::id();
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('gps-updated');
    }

    public function render()
    {
        return view('livewire.admin.gps-update');
    }
}
