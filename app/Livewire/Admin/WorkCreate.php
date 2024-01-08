<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\WorkForm;
use App\Livewire\Partials\Modal;
use App\Models\Category;
use App\Models\Company;
use App\Models\Driver;
use App\Models\Truck;
use Illuminate\Support\Facades\Auth;

class WorkCreate extends Modal
{
    public WorkForm $form;
    public $categories;
    public $contracts;
    public $sub_contracts;
    public $drivers;
    public $trucks;

    public function mount()
    {
        $this->categories = Category::where('key','=','works')->first()->categories()->get();
        $this->contracts = Company::whereRelation('category','key','=','contract')->get();
        $this->sub_contracts = Company::whereRelation('category','key','=','sub_contract')->get();
        $this->drivers = Driver::where('is_actived',true)->get();
        $this->trucks = Truck::where('is_actived',true)->get();
        $this->form->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.admin.work-create');
    }

    public function save()
    {
        $this->form->store();

        $this->show = false;
        
        $this->dispatch('work-created');

    }
}
