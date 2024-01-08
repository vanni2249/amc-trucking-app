<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\LoanForm;
use App\Livewire\Partials\Modal;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class LoanCreate extends Modal
{
    public LoanForm $form;

    public $companies;

    public function mount()
    {
        $this->companies = Company::whereRelation('category', 'key', '=', 'sub_contract')->get();
        $this->form->user_id = Auth::id();
    }

    public function save()
    {
        $this->form->store();

        $this->dispatch('loan-created');

        $this->show = false;
    }

    public function render()
    {
        return view('livewire.admin.loan-create');
    }
}
