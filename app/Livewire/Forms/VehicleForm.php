<?php

namespace App\Livewire\Forms;

use App\Models\Vehicle;
use Illuminate\Validation\Rule;
use Livewire\Form;

class VehicleForm extends Form
{
    public ?Vehicle $vehicle;

    public $year;

    public $brand;

    public $model;

    public $lic;

    public $vin;

    public $key;

    public $is_actived;

    public function rules()
    {
        return [
            'key' => [
                'required',
                Rule::unique('vehicles')->ignore($this->vehicle??''),
            ],
        ];
    }

    public function setVehicle(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
        $this->year = $vehicle->year;
        $this->brand = $vehicle->brand;
        $this->model = $vehicle->model;
        $this->lic = $vehicle->lic;
        $this->vin = $vehicle->vin;
        $this->key = $vehicle->key;
        $this->is_actived = boolval($vehicle->is_actived);
    }

    public function store()
    {
        $this->validate();

        Vehicle::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();
        
        $this->vehicle->update($this->all());
    }
}
