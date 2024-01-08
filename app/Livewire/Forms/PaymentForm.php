<?php

namespace App\Livewire\Forms;

use App\Models\Payment;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PaymentForm extends Form
{
    public ?Payment $payment;

    #[Validate('required')]
    public $type_payment_id;

    public $payment_type;

    #[Validate('required_if:payment_type,insurance')]
    public $insurance_id;

    #[Validate('required')]
    public $amount;
    

    #[Validate('required')]
    public $made_at;

    public $user_id;

    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
        $this->type_payment_id = $payment->type_payment_id;
        $this->amount = $payment->amount;
        $this->made_at = $payment->made_at;
    }

    public function store()
    {
        $this->validate();

        $payment = Payment::create($this->all());

        if ($this->insurance_id) {

            $payment->insurances()->attach($this->insurance_id);

        }

        return $payment;
    }

    public function update()
    {
        $this->validate();

        $this->payment->update($this->all());
        
    }
}
