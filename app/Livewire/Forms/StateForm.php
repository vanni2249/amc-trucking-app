<?php

namespace App\Livewire\Forms;

use App\Models\State;
use Illuminate\Validation\Rule;
use Livewire\Form;

class StateForm extends Form
{
    public ?State $state;

    public $name;

    public $is_actived;

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:4',
                Rule::unique('states')->ignore($this->state??''),
            ],
        ];
    }

    public function setState(State $state)
    {
        $this->state = $state;
        $this->name = $state->name;
        $this->is_actived = boolval($state->is_actived);
    }

    public function store()
    {
        $this->validate();

        State::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();
        
        $this->state->update($this->all());
    }
}
