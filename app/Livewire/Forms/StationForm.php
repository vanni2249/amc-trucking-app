<?php

namespace App\Livewire\Forms;

use App\Models\Station;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class StationForm extends Form
{
    public ?Station $station;

    #[Validate]
    public $name = '';

    public $is_actived;

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:4',
                Rule::unique('stations')->ignore($this->station??''),
            ],
        ];
    }

    public function setStation(Station $station)
    {
        $this->station = $station;
        $this->name = $station->name;
        $this->is_actived = boolval($station->is_actived);
    }

    public function store()
    {
        $this->validate();

        Station::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();
        
        $this->station->update($this->all());
    }
}
