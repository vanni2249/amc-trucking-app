<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class InsurancePaymentDelete extends Modal
{
    public $insurance;
    public $payment;


    public function delete()
    {
        $this->payment->insurances()->detach($this->insurance);
        
        $this->payment->delete();

        $this->redirect('/admin/insurances/'.$this->insurance->id.'/payments');

    }

    public function render()
    {
        return view('livewire.admin.insurance-payment-delete');
    }
}
