<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\FuelForm;
use App\Livewire\Partials\Modal;
use App\Models\Card;
use App\Models\Category;
use App\Models\Company;
use App\Models\Driver;
use App\Models\State;
use App\Models\Station;
use App\Models\Truck;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class FuelCreate extends Modal
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

    public function mount()
    {
        $this->fuel_types = Category::where('key','=','fuel_types')->first()->categories()->get();
        $this->states = State::all();
        $this->stations = Station::get();
        $this->companies = Company::whereRelation('category','key','=','sub_contract')->get();
        $this->drivers = Driver::get();
        $this->cards = Card::get();
        $this->trucks = Truck::get();
        $this->vehicles = Vehicle::get();
        $this->fuel_units = Category::where('key','=','fuel_units')->first()->categories()->get();
        $this->form->user_id = Auth::id();
    }

    public function updated($property)
    {
        if ($property === 'form.company_id') {
            $this->form->card_id = '';
            $this->cards = Card::where('company_id',$this->form->company_id)->get();
        }
        if ($this->form->fuel_type_id) {
            $this->form->fuel_type = Category::find($this->form->fuel_type_id)->key;
        }
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;

        $this->dispatch('fuel-created');
    }

    public function render()
    {
        return view('livewire.admin.fuel-create');
    }
}
