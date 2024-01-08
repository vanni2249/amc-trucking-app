<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class InsurancePaymentRead extends Component
{
    public $insurance;
    public $payment;

    #[On('insurance-payment-updated')]
    public function render()
    {
        return view('livewire.admin.insurance-payment-read');
    }
}
