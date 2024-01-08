<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InsurancePaymentForm;
use App\Livewire\Partials\Modal;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class InsurancePaymentUpdate extends Modal
{
    public InsurancePaymentForm $form;

    public function mount(Payment $payment)
    {
        $this->form->setInsurancePayment($payment);
        $this->form->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.admin.insurance-payment-update');
    }

    public function update()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('insurance-payment-updated');
    }
}
