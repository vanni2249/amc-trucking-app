<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class LoanRead extends Component
{
    public $loan;
    
    #[On('loan-updated')]
    public function render()
    {
        return view('livewire.admin.loan-read');
    }
}
