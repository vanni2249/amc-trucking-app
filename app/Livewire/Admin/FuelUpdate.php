<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\FuelForm;
use App\Livewire\Partials\Modal;
use App\Models\Card;
use App\Models\Category;
use App\Models\Company;
use App\Models\Driver;
use App\Models\Fuel;
use App\Models\State;
use App\Models\Station;
use App\Models\Truck;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class FuelUpdate extends Modal
{
    public FuelForm $form;
    public $fuel_types;
    public $states;
    public $stations;
    public $companies;
    public $drivers;
    public $cards;
    public $trucks;
    public $vehicles;
    public $fuel_units;

    public function mount(Fuel $fuel)
    {
        $this->form->setFuel($fuel);
        $this->fuel_types = Category::where('category_id',4)->get();
        $this->states = State::all();
        $this->stations = Station::get();
        $this->companies = Company::where('category_id',5)->get();
        $this->drivers = Driver::get();
        $this->cards = Card::get();
        $this->trucks = Truck::get();
        $this->vehicles = Vehicle::get();
        $this->fuel_units = Category::where('category_id',5)->get();
        $this->form->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.admin.fuel-update');
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('fuel-updated');
    }
}
