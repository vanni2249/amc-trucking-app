<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PaymentFuels extends Component
{
    public $payment;

    public function delete($id)
    {
        $this->payment->fuels()->detach($id);

        $this->dispatch('payment-fuel-detached');
    }

    #[On('payment-fuel-attached')]
    public function render()
    {
        return view('livewire.admin.payment-fuels',[
            'fuels' => $this->payment->fuels()->get()
        ]);
    }
}
