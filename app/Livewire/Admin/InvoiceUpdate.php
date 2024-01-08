<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InvoiceForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;

class InvoiceUpdate extends Modal
{
    public InvoiceForm $form;
    public $contracts;



    public function mount(Invoice $invoice)
    {
        $this->form->setInvoice($invoice);
        $this->contracts = Company::where('category_id',4)->get();
        $this->form->user_id = Auth::id();

    }
    
    public function render()
    {
        return view('livewire.admin.invoice-update');
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('invoice-updated');
 
    }
}
