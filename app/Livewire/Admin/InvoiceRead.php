<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class InvoiceRead extends Component
{
    public $invoice;

    #[On('invoice-updated')]
    #[On('invoice-work-attached')]
    #[On('invoice-work-detached')]
    public function render()
    {
        return view('livewire.admin.invoice-read');
    }
}
