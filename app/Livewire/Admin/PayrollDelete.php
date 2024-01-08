<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;
use Livewire\Attributes\On;

class PayrollDelete extends Modal
{
    public $payroll;

    public function mount($payroll){
        $this->payroll = $payroll;
    }

    #[On('payroll-work-attached')]
    #[On('payroll-work-detached')]
    #[On('payroll-updated')]
    public function render()
    {
        return view('livewire.admin.payroll-delete');
    }

    public function delete()
    {
        $this->payroll->delete();
        $this->redirect('/admin/payrolls'); 
    }
}
