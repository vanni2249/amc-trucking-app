<?php

namespace App\Livewire\Admin;

use App\Models\Payroll;
use Livewire\Component;
use Livewire\WithPagination;

class Payrolls extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.payrolls', [
            'payrolls' => Payroll::orderBy('paid_at', 'desc')->paginate()
        ]);
    }
}
