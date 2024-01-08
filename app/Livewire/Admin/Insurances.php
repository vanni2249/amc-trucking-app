<?php

namespace App\Livewire\Admin;

use App\Models\Insurance;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Insurances extends Component
{
    use WithPagination;
    
    #[On('insurance-created')]
    public function render()
    {
        return view('livewire.admin.insurances',[
            'insurances' => Insurance::whereNull('insurance_id')->paginate(15)
        ]);
    }
}
