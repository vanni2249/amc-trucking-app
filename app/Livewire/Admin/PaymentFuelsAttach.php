<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use App\Models\Fuel;

class PaymentFuelsAttach extends Modal
{
    public $payment;

    public $selected = [];

    public function save()
    {
        $this->payment->fuels()->attach($this->selected);

        $this->show = false;

        $this->reset('selected');

        $this->dispatch('payment-fuel-attached');
    }

    public function render()
    {
        return view('livewire.admin.payment-fuels-attach',[
            'fuels' => Fuel::doesntHave('payments')->get()
        ]);
    }
}
