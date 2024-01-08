<?php

namespace App\Livewire\Admin;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithPagination;

class Payments extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.admin.payments',[
            'payments' => Payment::orderBy('made_at','desc')->paginate()
        ]);
    }
}
