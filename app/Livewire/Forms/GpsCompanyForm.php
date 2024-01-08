<?php

namespace App\Livewire\Forms;

use App\Models\Gps;
use Livewire\Attributes\Validate;
use Livewire\Form;

class GpsCompanyForm extends Form
{
    public ?Gps $gps;

    #[Validate('required')]
    public $company_id;

    #[Validate('required')]
    public $amount;

    public $gps_id;

    public $user_id;

    public function setGpsCompany($gps)
    {
        $this->gps = $gps;
        $this->company_id = $gps->company_id;
        $this->amount = $gps->amount;
        $this->user_id = $gps->user_id;
    }

    public function store()
    {
        $this->validate();

        $this->gps->gps()->create($this->all());

        $this->reset('company_id','amount','gps_id');
    }

    public function update()
    {
        $this->validate();

        $this->gps->update($this->all());
    }
}
