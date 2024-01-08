<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PaymentForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Insurance;
use Illuminate\Support\Facades\Auth;

class PaymentCreate extends Modal
{
    public PaymentForm $form;

    public $payments_types;

    public $insurances;

    public function mount()
    {
        $this->payments_types = Category::where('key', '=', 'payments')->first()->categories()->get();
        $this->insurances = Insurance::whereNull('insurance_id')->get();
        $this->form->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.admin.payment-create');
    }

    public function updated()
    {
        $this->form->payment_type = Category::find($this->form->type_payment_id)->key;
    }

    public function save()
    {
        $payment = $this->form->store();

        $this->redirect('/admin/payments/'.$payment->id);
    }
}
