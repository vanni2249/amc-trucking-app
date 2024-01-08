<?php

namespace App\Livewire\Forms;

use App\Models\Insurance;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InsuranceForm extends Form
{
    public ?Insurance $insurance;

    #[Validate('required')]
    public $company_id;

    #[Validate('required|min:5')]
    public $reference;

    #[Validate('date')]
    public $started_at;

    #[Validate('date')]
    public $completed_at;

    public $user_id;

    public function setInsurance(insurance $insurance)
    {
        $this->insurance = $insurance;
        $this->company_id = $insurance->company_id;
        $this->reference = $insurance->reference;
        $this->started_at = $insurance->started_at;
        $this->completed_at = $insurance->completed_at;
        $this->user_id = $insurance->user_id;
  
    }

    public function store()
    {
        $this->validate();
        
        return Insurance::create($this->all());
    
    }

    public function update()
    {
        $this->validate();

        $this->insurance->update($this->all());
    }
}
