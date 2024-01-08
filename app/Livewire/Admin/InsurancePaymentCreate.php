<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InsurancePaymentForm;
use App\Livewire\Partials\Modal;
use Illuminate\Support\Facades\Auth;

class InsurancePaymentCreate extends Modal
{
    public InsurancePaymentForm $form;

    public function mount($insurance)
    {
        $this->form->user_id = Auth::id();
        $this->form->insurance = $insurance;
        $this->form->category_id = 22;
    }

    public function render()
    {
        return view('livewire.admin.insurance-payment-create');
    }

    public function save()
    {
        $this->form->store();
        
        $this->show = false;

        $this->dispatch('insurance-payment-created');
    }
}
