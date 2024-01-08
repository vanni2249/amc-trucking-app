<?php

namespace App\Livewire\Admin;

use App\Models\Work;
use Livewire\WithPagination;

class Works extends WorksFilters
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.works', [
            'works' => Work::search($this->search)->orderBy('completed_at', 'desc')->paginate($this->paginate),
        ]);
    }
}
