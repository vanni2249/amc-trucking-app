<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class CompanyDelete extends Modal
{
    public $company;

    public function mount($company){
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.admin.company-delete');
    }

    public function delete()
    {
        $this->company->delete();
        $this->redirect('/admin/companies'); 
    }
}
