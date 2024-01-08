<?php

namespace App\Livewire\Admin;

use App\Models\Vehicle;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Vehicles extends Component
{
    use WithPagination;

    #[On('vehicle-created')]
    public function render()
    {
        return view('livewire.admin.vehicles', [
            'vehicles' => Vehicle::paginate()
        ]);
    }
}
