<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\LoanForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;

class LoanUpdate extends Modal
{
    public LoanForm $form;
    public $companies;

    public function mount($loan)
    {
        $this->companies = Company::whereRelation('category', 'key', '=', 'sub_contract')->get();
        $this->form->setLoan($loan);
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('loan-updated');
    }

    public function render()
    {
        return view('livewire.admin.loan-update');
    }
}
