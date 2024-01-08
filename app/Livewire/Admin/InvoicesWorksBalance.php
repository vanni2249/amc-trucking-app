<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class InvoicesWorksBalance extends Component
{
    public $invoice;


    #[On('invoice-works-attached')]
    #[On('invoice-work-detached')]
    public function render()
    {
        return view('livewire.admin.invoices-works-balance');
    }
}
