<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class GpsCompanies extends Component
{
    public $gps;

    #[On('gps-company-created')]
    public function render()
    {
        return view('livewire.admin.gps-companies',[
            'companies' => $this->gps->gpses()->get()
        ]);
    }
}
