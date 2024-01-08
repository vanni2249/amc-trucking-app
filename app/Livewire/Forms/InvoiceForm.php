<?php

namespace App\Livewire\Forms;

use App\Models\Invoice;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InvoiceForm extends Form
{
    public ?Invoice $invoice;

    #[Validate('required|min:5')]
    public $reference;

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

    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;
        $this->reference = $invoice->reference;
        $this->contract_id = $invoice->contract_id;
        $this->started_at = $invoice->started_at;
        $this->completed_at = $invoice->completed_at;
        $this->paid_at = $invoice->paid_at;
        $this->user_id = $invoice->user_id;
  
    }

    public function store()
    {
        $this->validate();
        
        $this->invoice = Invoice::create($this->all());
        
    }
    
    public function update()
    {
        $this->validate();
        
        $this->invoice->update(
            $this->all()
        );
    }
}
