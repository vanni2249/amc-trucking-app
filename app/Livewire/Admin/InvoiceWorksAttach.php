<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use App\Models\Work;
use Livewire\Attributes\On;

class InvoiceWorksAttach extends Modal
{
    public $invoice;
    public $selected = [];
 
    public function save()
    {
        $this->invoice->works()->attach($this->selected);

        $this->dispatch('invoice-works-attached');
        
        $this->show = false;

        $this->reset('selected');
    }
    
    #[On('invoice-works-attached')]
    #[On('invoice-work-detached')]
    public function render()
    {
        return view('livewire.admin.invoice-works-attach',[
            'works' => Work::doesntHave('invoices')->orderBy('completed_at','asc')->get()
        ]);
    }

}
