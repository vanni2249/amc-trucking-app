<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InsuranceForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Company;
use App\Models\Insurance;

class InsuranceUpdate extends Modal
{
    public InsuranceForm $form;
    public $category;
    public $companies;
    public $insurance;

    public function mount(Insurance $insurance)
    {
        $this->form->setInsurance($insurance);
        $this->category = Category::where('key','=','insurance')->first();
        $this->companies = Company::where('category_id',$this->category->id)->get();
    }

    public function render()
    {
        return view('livewire.admin.insurance-update');
    }

    public function save()
    {
        $this->form->update();

        $this->show = false;

        $this->dispatch('insurance-updated');
    }
}
