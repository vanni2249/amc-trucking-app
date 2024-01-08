<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CardForm;
use App\Livewire\Partials\Modal;
use App\Models\Card;
use App\Models\Company;
use App\Models\Driver;
use App\Models\Station;
use App\Models\Truck;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CardUpdate extends Modal
{
    public CardForm $form;

    public $stations;

    public $companies;

    public $drivers;

    public $trucks;

    public function mount(Card $card)
    {
        $this->form->setCard($card);
        $this->stations = Station::all();
        $this->companies = Company::where('category_id', 5)->get();
        $this->drivers = Driver::all();
        $this->trucks = Truck::all();
    }

    public function save()
    {
        $card = $this->form->update();

        $this->show = false;

        $this->dispatch('card-updated');
    }

    public function render()
    {
        return view('livewire.admin.card-update');
    }
}
