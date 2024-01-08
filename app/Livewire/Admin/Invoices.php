<?php

namespace App\Livewire\Admin;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.invoices',[
            'invoices' => Invoice::orderBy('paid_at','desc')->paginate(15)
        ]);
    }
}
