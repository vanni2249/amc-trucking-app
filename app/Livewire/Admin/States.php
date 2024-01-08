<?php

namespace App\Livewire\Admin;

use App\Models\State;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class States extends Component
{
    use WithPagination;
    
    #[On('state-created')]
    public function render()
    {
        return view('livewire.admin.states',[
            'states' => State::orderBy('name','asc')->paginate()
        ]);
    }
}
