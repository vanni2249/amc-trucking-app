<?php

namespace App\Livewire\Forms;

use App\Models\Gps;
use Livewire\Attributes\Validate;
use Livewire\Form;

class GpsForm extends Form
{
    public Gps $gps;

    #[Validate('required')]
    public $company_id;

    #[Validate('required')]
    public $started_at;

    #[Validate('required')]
    public $completed_at;

    public $user_id;

    public function setGps($gps)
    {
        $this->gps = $gps;
        $this->company_id = $gps->company_id;
        $this->started_at = $gps->started_at;
        $this->completed_at = $gps->completed_at;
        $this->user_id = $gps->user_id;
    }

    public function store()
    {
        $this->validate();

        Gps::create($this->all());

        $this->reset('company_id','started_at','completed_at');
    }

    public function update()
    {
        $this->validate();

        $this->gps->update($this->all());
    }
}
