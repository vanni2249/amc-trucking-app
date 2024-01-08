<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InsuranceForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class InsuranceCreate extends Modal
{
    public InsuranceForm $form;

    public $category;
    public $companies;

    public function mount()
    {
        $this->category = Category::where('key','=','insurance')->first();
        $this->companies = Company::where('category_id',$this->category->id)->get();
        $this->form->user_id = Auth::id();
        
    }
    
    public function render()
    {
        return view('livewire.admin.insurance-create');
    }

    public function save()
    {
        $insurance = $this->form->store();
        
        $this->redirect('/admin/insurances/'.$insurance->id);
    }
}
