<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PayrollForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Auth;

class PayrollCreate extends Modal
{
    public PayrollForm $form;
    public $contracts;



    public function mount()
    {
        $this->contracts = Company::whereRelation('category','key','=','sub_contract')->get();

        $this->form->user_id = Auth::id();

    }

    public function render()
    {
        return view('livewire.admin.payroll-create');
    }

    public function save()
    {
        $this->form->store();

        $this->redirect('/admin/payrolls/'.$this->form->payroll->id);
    }

}