<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollFuels extends Component
{
    public $payroll;

    public function delete($id)
    {
        $this->payroll->fuels()->detach($id);

        $this->dispatch('payroll-fuel-detached');
    }

    #[On('payroll-fuels-attached')]
    public function render()
    {
        return view('livewire.admin.payroll-fuels',[
            'fuels' => $this->payroll->fuels()->get()
        ]);
    }
}
