<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use App\Models\Work;
use Livewire\Attributes\On;

class PayrollWorksAttach extends Modal
{
    public $payroll;
    public $selected = [];
 
    #[On('payroll-works-attached')]
    #[On('payroll-work-detached')]
    public function render()
    {
        return view('livewire.admin.payroll-works-attach',[
            'works' => Work::has('invoices')
                            ->doesntHave('payrolls')
                            ->where('sub_contract_id',$this->payroll->contract_id)
                            ->get()
        ]);
    }

    public function save()
    {
        $this->payroll->works()->attach($this->selected);

        $this->dispatch('payroll-works-attached');

        $this->reset('selected');

        $this->show = false;
    }
}
