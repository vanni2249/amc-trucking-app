<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class InsurancePayments extends Component
{
    public $insurance;

    #[On('insurance-payment-created')]
    public function render()
    {
        return view('livewire.admin.insurance-payments');
    }
}
