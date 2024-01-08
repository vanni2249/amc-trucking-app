<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class PayrollWorks extends Component
{
    public $payroll;
    
    public function detach($work)
    {
        $this->payroll->works()->detach($work);

        $this->dispatch('payroll-work-detached');
    }

    #[On('payroll-works-attached')]
    #[On('payroll-work-detached')]
    public function render()
    {
        return view('livewire.admin.payroll-works',[
            'works' => $this->payroll->works()->get()
        ]);
    }

}
