<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PaymentFuelsBalance extends Component
{
    public $payment;

    #[On('payment-fuel-detached')]
    #[On('payment-fuel-attached')]
    public function render()
    {
        return view('livewire.admin.payment-fuels-balance');
    }
}
