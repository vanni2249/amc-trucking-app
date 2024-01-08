<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\GpsCompanyForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class GpsCompanyCreate extends Modal
{
    public GpsCompanyForm $form;

    public $companies;

    public function mount($gps)
    {
        $this->companies =  Company::whereRelation('category', 'key', '=', 'sub_contract')->get();
        $this->form->gps = $gps;
        $this->form->gps_id = $gps->id;
        $this->form->user_id = Auth::id();
    }

    public function save()
    {
        $this->form->store();

        $this->dispatch('gps-company-created');

        $this->show = false;
    }

    public function render()
    {
        return view('livewire.admin.gps-company-create');
    }
}
