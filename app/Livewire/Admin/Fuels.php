<?php

namespace App\Livewire\Admin;

use App\Models\Fuel;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Fuels extends Component
{
    use WithPagination;

    #[On('fuel-created')]
    public function render()
    {
        return view('livewire.admin.fuels',[
            'fuels' => Fuel::orderBy('made_at','desc')->paginate(15)
        ]);
    }
}
