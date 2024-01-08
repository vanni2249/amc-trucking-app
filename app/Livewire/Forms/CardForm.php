<?php

namespace App\Livewire\Forms;

use App\Models\Card;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CardForm extends Form
{
    public ?Card $card;

    #[Validate('required')]
    public $number;

    public $key;

    public $station_id;

    #[Validate('required')]
    public $name;

    public $company_id;

    public $driver_id;

    public $truck_id;

    public $is_actived;

    public $user_id;

    public function setCard($card) 
    {
        $this->card = $card;
        $this->number = $card->number;
        $this->key = $card->key;
        $this->station_id = $card->station_id;
        $this->name = $card->name;
        $this->company_id = $card->company_id;
        $this->driver_id = $card->driver_id;
        $this->truck_id = $card->truck_id;
        $this->is_actived = $card->is_actived;
        $this->user_id = $card->user_id;
    }

    public function store()
    {
        $this->validate();

        return Card::create($this->all());
    }

    public function update()
    {
        $this->validate();

        $this->card->update($this->all());

    }

}
