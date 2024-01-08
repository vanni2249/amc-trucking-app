<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class LoanDelete extends Modal
{
    public $loan;

    public function delete()
    {
        $this->loan->delete();

        $this->redirect('/admin/loans');
    }

    public function render()
    {
        return view('livewire.admin.loan-delete');
    }
}
