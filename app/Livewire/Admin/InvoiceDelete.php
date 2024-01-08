<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class InvoiceDelete extends Modal
{
    public $invoice;

    public function mount($invoice){
        $this->invoice = $invoice;
    }

    public function render()
    {
        return view('livewire.admin.invoice-delete');
    }

    public function delete()
    {
        $this->invoice->delete();
        $this->redirect('/admin/invoices'); 
    }
}
