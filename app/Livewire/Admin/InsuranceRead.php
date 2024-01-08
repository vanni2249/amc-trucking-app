<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class InsuranceRead extends Component
{
    public $insurance;
    
    #[On('insurance-updated')]
    #[On('insurance-insurance-created')]
    #[On('insurance-insurance-updated')]
    public function render()
    {
        return view('livewire.admin.insurance-read');
    }
}
