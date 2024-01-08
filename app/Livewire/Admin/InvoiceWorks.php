<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class InvoiceWorks extends Component
{
    public $invoice;
    // public $works;

    #[On('invoice-works-attached')]
    #[On('invoice-work-detached')]
    public function mount()
    {
        // $this->works = $this->invoice->works()->get();
    }
    public function render()
    {
        return view('livewire.admin.invoice-works',[
            'works' => $this->invoice->works()->orderBy('completed_at','asc')->get()
        ]);
    }

    public function detach($work)
    {
        $this->invoice->works()->detach($work);

        $this->dispatch('invoice-work-detached');
    }
}
