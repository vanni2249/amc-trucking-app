<?php

namespace App\Livewire\Admin;

use App\Models\Company;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Companies extends Component
{
    use WithPagination;

    #[On('company-created')]
    public function render()
    {
        return view('livewire.admin.companies', [
            'companies' => Company::paginate(12)
        ]);
    }
}
