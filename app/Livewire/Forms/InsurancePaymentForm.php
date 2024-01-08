<?php

namespace App\Livewire\Forms;

use App\Models\Payment;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InsurancePaymentForm extends Form
{
    public ?Payment $payment;

    public $insurance;

    public $category_id;

    #[Validate('numeric|decimal:2')]
    public $amount;

    #[Validate('date')]
    public $made_at;

    public $user_id;

    public function setInsurancePayment(Payment $payment)
    {
        $this->payment = $payment;
        $this->category_id = $payment->category_id;
        $this->amount = $payment->amount;
        $this->made_at = $payment->made_at;
    }

    public function store()
    {
        $this->validate();

        $payment = Payment::create($this->all());

        $payment->insurances()->attach($this->insurance);

        $this->reset('amount','made_at');
    }

    public function update()
    {
        $this->validate();

        $this->payment->update($this->all());
    }
}
