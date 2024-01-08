<?php

namespace App\Livewire\Admin;

use App\Models\Station;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Stations extends Component
{
    use WithPagination;

    #[On('station-created')]
    public function render()
    {
        return view('livewire.admin.stations', [
            'stations' => Station::orderBy('name', 'asc')->paginate()
        ]);
    }
}
