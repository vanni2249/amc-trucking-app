<?php

namespace App\Livewire\Admin;

use App\Models\Driver;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Drivers extends Component
{
    use WithPagination;

    #[On('driver-created')]
    public function render()
    {
        return view('livewire.admin.drivers',[
            'drivers' => Driver::paginate(15)
        ]);
    }
}
