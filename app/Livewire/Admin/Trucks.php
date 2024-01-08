<?php

namespace App\Livewire\Admin;

use App\Models\Truck;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Trucks extends Component
{
    use WithPagination;

    #[On('truck-created')]
    public function render()
    {
        return view('livewire.admin.trucks',[
            'trucks' => Truck::paginate()
        ]);
    }
}
