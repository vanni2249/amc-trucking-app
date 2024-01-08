<?php

namespace App\Livewire\Forms;

use App\Models\Fuel;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FuelForm extends Form
{
    public ?Fuel $fuel;

    #[Validate('required')]
    public $fuel_type_id;

    public $fuel_type;

    #[Validate('required')]
    public $state_id;

    #[Validate('required')]
    public $station_id;

    #[Validate('required')]
    public $company_id;

    #[Validate('required')]
    public $driver_id;

    #[Validate('required')]
    public $card_id;
    
    #[Validate('required_if:fuel_type,diesel')]
    public $truck_id;
    
    #[Validate('required_if:fuel_type_id,gas')]
    public $vehicle_id;
    
    #[Validate('required_if:fuel_type_id,diesel,gas')]
    public $fuel_unit_id;
    
    #[Validate('required_if:fuel_type_id,diesel,gas')]
    public $units;

    #[Validate('required_if:fuel_type_id,diesel,gas')]
    public $price_unit;

    #[Validate('required')]
    public $amount;
  
    public $discount;
    
    #[Validate('required')]
    public $made_at;

    public $user_id;

    public function setFuel(Fuel $fuel)
    {
        $this->fuel = $fuel;
        $this->fuel_type_id = $fuel->fuel_type_id;
        $this->state_id = $fuel->state_id;
        $this->station_id = $fuel->station_id;
        $this->company_id = $fuel->company_id;
        $this->driver_id = $fuel->driver_id;
        $this->card_id = $fuel->card_id;
        $this->truck_id = $fuel->truck_id;
        $this->vehicle_id = $fuel->vehicle_id;
        $this->fuel_unit_id = $fuel->fuel_unit_id;
        $this->units = $fuel->units;
        $this->price_unit = $fuel->price_unit;
        $this->discount = $fuel->discount;
        $this->amount = $fuel->amount;
        $this->made_at = $fuel->made_at;
        $this->user_id = $fuel->user_id;
    }

    public function store()
    {
        $this->validate();

        Fuel::create($this->all());

        $this->reset([
            'fuel_type_id',
            'state_id',
            'station_id',
            'company_id',
            'driver_id',
            'card_id',
            'truck_id',
            'vehicle_id',
            'fuel_unit_id',
            'units',
            'price_unit',
            'discount',
            'amount',
            'made_at',
        ]);
    }
    
    public function update()
    {
        $this->validate();

        $this->fuel->update($this->all());
    }
}
