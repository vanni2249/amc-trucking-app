<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CardForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use App\Models\Driver;
use App\Models\Station;
use App\Models\Truck;
use Illuminate\Support\Facades\Auth;

class CardCreate extends Modal
{
    public CardForm $form;

    public $stations;

    public $companies;

    public $drivers;

    public $trucks;

    public function mount()
    {
        $this->stations = Station::all();
        $this->companies = Company::where('category_id', 5)->get();
        $this->drivers = Driver::all();
        $this->trucks = Truck::all();
        $this->form->user_id = Auth::id();
        $this->form->is_actived = true;
    }

    public function save()
    {
        $card = $this->form->store();

        $this->redirect('/admin/cards/' . $card->id);
    }

    public function render()
    {
        return view('livewire.admin.card-create');
    }
}
