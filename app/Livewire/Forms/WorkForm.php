<?php

namespace App\Livewire\Forms;

use App\Models\Work;
use Livewire\Attributes\Validate;
use Livewire\Form;

class WorkForm extends Form
{
    public ?Work $work;

    #[Validate('required')]
    public $category_id;

    #[Validate('required|min:5')]
    public $reference;

    #[Validate('required')]
    public $contract_id;
    
    #[Validate('required')]
    public $sub_contract_id;

    #[Validate('required')]
    public $driver_id;

    #[Validate('required')]
    public $truck_id;

    #[Validate('date')]
    public $started_at;

    #[Validate('date')]
    public $completed_at;

    #[Validate('numeric')]
    public $loads;

    #[Validate('numeric')]
    public $loads_completed;

    #[Validate('numeric|decimal:2')]
    public $price_mile;

    #[Validate('numeric|decimal:1')]
    public $miles;

    #[Validate('numeric|decimal:2')]
    public $amount;

    #[Validate('required')]
    public $user_id;

    public function setWork(Work $work)
    {
        $this->work = $work;
        $this->category_id = $work->category_id;
        $this->reference = $work->reference;
        $this->contract_id = $work->contract_id;
        $this->sub_contract_id = $work->sub_contract_id;
        $this->driver_id = $work->driver_id;
        $this->truck_id = $work->truck_id;
        $this->started_at = $work->started_at;
        $this->completed_at = $work->completed_at;
        $this->loads = $work->loads;
        $this->loads_completed = $work->loads_completed;
        $this->price_mile = $work->price_mile;
        $this->miles = $work->miles;
        $this->amount = $work->amount;
        $this->user_id = $work->user_id;
  
    }

    public function store()
    {
        $this->validate();
        
        Work::create($this->all());
        
        $this->reset([
            'category_id',
            'reference',
            'contract_id',
            'sub_contract_id',
            'driver_id',
            'truck_id',
            'started_at',
            'completed_at',
            'loads',
            'loads_completed',
            'miles',
            'price_mile',
            'amount',
        ]);
        
    }
    
    public function update()
    {
        $this->validate();
        $this->work->update(
            $this->all()
        );
    }

}
