<?php

namespace App\Livewire\Forms;

use App\Models\Truck;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TruckForm extends Form
{
    public ?Truck $truck;
    
    #[Validate('required|min:3')]
    public $brand;

    #[Validate('required|min:3')]
    public $model;
    
    public $vin;

    public $lic;
    
    #[Validate('required|min:1')]
    public $key;

    public $is_actived;

    public function setTruck(Truck $truck)
    {
        $this->truck = $truck;
        $this->brand = $truck->brand;
        $this->model = $truck->model;
        $this->vin = $truck->vin;
        $this->key = $truck->key;
        $this->lic = $truck->lic;
        $this->is_actived = boolval($truck->is_actived);
    }

    public function store()
    {
        $this->validate();

        Truck::create($this->all());
        
        $this->reset();
    }

    public function update() 
    {
        $this->validate();
        
        $this->truck->update($this->all());

    }
}
