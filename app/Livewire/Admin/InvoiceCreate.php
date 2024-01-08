<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InvoiceForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class InvoiceCreate extends Modal
{
    public InvoiceForm $form;
    public $contracts;



    public function mount()
    {
        // $this->contracts = Company::where('category_id',4)->get();
        $this->contracts = Company::whereRelation('category','key','=','contract')->get();

        $this->form->user_id = Auth::id();

    }
    public function render()
    {
        return view('livewire.admin.invoice-create');
    }

    public function save()
    {
        $this->form->store();

        $this->redirect('/admin/invoices/'.$this->form->invoice->id);
    }
    
}
