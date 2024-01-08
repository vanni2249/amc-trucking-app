<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class CompanyRead extends Component
{
    public $company;

    public function mount($company){
        $this->company = $company;
    }

    #[On('company-updated')]
    public function render()
    {
        return view('livewire.admin.company-read');
    }
}
