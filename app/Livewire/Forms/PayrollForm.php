<?php

namespace App\Livewire\Forms;

use App\Models\Payroll;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PayrollForm extends Form
{
    public ?Payroll $payroll;

    #[Validate('required')]
    public $contract_id;
    
    #[Validate('date')]
    public $started_at;

    #[Validate('date')]
    public $completed_at;

    #[Validate('date')]
    public $paid_at;

    #[Validate('required')]
    public $user_id;
    
    #[Validate('required')]
    public $view_at;

    public function setPayroll(Payroll $payroll)
    {
        $this->payroll = $payroll;
        $this->contract_id = $payroll->contract_id;
        $this->started_at = $payroll->started_at;
        $this->completed_at = $payroll->completed_at;
        $this->paid_at = $payroll->paid_at;
        $this->view_at = $payroll->view_at;
        $this->user_id = $payroll->user_id;
  
    }

    public function store()
    {
        $this->validate();
        
        $this->payroll = Payroll::create($this->all());
        
    }
    
    public function update()
    {
        $this->validate();
        
        $this->payroll->update(
            $this->all()
        );
    }
}
