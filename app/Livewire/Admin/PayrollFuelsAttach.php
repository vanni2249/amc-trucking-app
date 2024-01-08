<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use App\Models\Fuel;

class PayrollFuelsAttach extends Modal
{
    public $payroll;
    public $selected = [];

    public function save()
    {
        $this->payroll->fuels()->attach($this->selected);

        $this->reset('selected');

        $this->show = false;

        $this->dispatch('payroll-fuels-attached');
    }

    public function render()
    {
        return view('livewire.admin.payroll-fuels-attach',[
            'fuels' => Fuel::where('company_id',$this->payroll->contract->id)->doesntHave('payrolls')->get()
        ]);
    }

}
