<?php

namespace App\Livewire\Admin;

use App\Models\Loan;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Loans extends Component
{
    use WithPagination;
    
    #[On('loan-created')]
    public function render()
    {
        return view('livewire.admin.loans',[
            'loans' => Loan::orderBy('made_at','desc')->paginate()
        ]);
    }
}
