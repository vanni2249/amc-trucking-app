<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PaymentForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Insurance;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentUpdate extends Modal
{
    public PaymentForm $form;

    public $payments_types;

    public $insurances;

    public function mount(Payment $payment)
    {
        $this->form->setPayment($payment);
        $this->payments_types = Category::where('key', '=', 'payments')->first()->categories()->get();
        $this->insurances = Insurance::all();
        $this->form->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.admin.payment-update');
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('payment-updated');
    }
}
