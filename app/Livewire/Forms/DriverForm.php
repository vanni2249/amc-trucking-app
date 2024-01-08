<?php

namespace App\Livewire\Forms;

use App\Models\Driver;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DriverForm extends Form
{
    public ?Driver $driver;

    #[Validate('required|min:5')]
    public $name;

    #[Validate('email')]
    public $email;

    public $is_actived;

    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
        $this->name = $driver->name;
        $this->email = $driver->email;
        $this->is_actived = boolval($driver->is_actived);
    }

    public function store()
    {
        $this->validate();

        Driver::create($this->all());

        $this->reset('name','email');
    }
    
    public function update()
    {
        $this->validate();

        $this->driver->update($this->all());

    }
}
