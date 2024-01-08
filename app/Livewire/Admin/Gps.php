<?php

namespace App\Livewire\Admin;

use App\Models\Gps as ModelsGps;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Gps extends Component
{
    use WithPagination;

    #[On('gps-created')]
    public function render()
    {
        return view('livewire.admin.gps',[
            'gps' => ModelsGps::whereNull('gps_id')->orderBy('started_at','desc')->paginate()
        ]);
    }
}
