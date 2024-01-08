<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PaymentRead extends Component
{
    public $payment;
    
    #[On('payment-updated')]
    public function render()
    {
        return view('livewire.admin.payment-read');
    }
}
