<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class PaymentDelete extends Modal
{
    public $payment;

    public function render()
    {
        return view('livewire.admin.payment-delete');
    }

    public function delete()
    {

        if ($this->payment->insurances()->count()) {
            $this->payment->insurances()->detach($this->payment->insurances()->first()->id);
        }

        
        $this->payment->delete();

        $this->redirect('/admin/payments');
    }
}
