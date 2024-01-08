<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use Livewire\Attributes\On;

class InsuranceCompanies extends Modal
{
    public $insurance;
    
    #[On('insurance-insurance-created')]
    #[On('insurance-insurance-updated')]
    public function render()
    {
        return view('livewire.admin.insurance-companies');
    }

}
