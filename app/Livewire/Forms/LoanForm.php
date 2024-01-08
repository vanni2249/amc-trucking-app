<?php

namespace App\Livewire\Forms;

use App\Models\Loan;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoanForm extends Form
{
    public ?Loan $loan;
    
    #[Validate('required')]
    public $company_id;

    #[Validate('required')]
    public $amount;

    #[Validate('required')]
    public $made_at;

    public $user_id;

    public function setLoan($loan)
    {
        $this->loan = $loan;
        $this->company_id = $loan->company_id;
        $this->amount = $loan->amount;
        $this->made_at = $loan->made_at;
        $this->user_id = $loan->user_id;
    }

    public function store()
    {
        $this->validate();

        Loan::create($this->all());

        $this->reset('company_id','amount','made_at');
    }

    public function update()
    {
        $this->validate();
        
        $this->loan->update($this->all());
    }
}
