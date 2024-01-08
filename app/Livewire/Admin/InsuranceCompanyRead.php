<?php

namespace App\Livewire\Admin;

use App\Models\Insurance;
use Livewire\Attributes\On;
use Livewire\Component;

class InsuranceCompanyRead extends Component
{
    public $insurance;
    
    public function mount($insurance, $company)
    {
        $this->insurance = Insurance::where('insurance_id', $insurance->id)->where('company_id',$company->id)->get()->first();
    }

    #[On('insurance-insurance-updated')]
    public function render()
    {
        return view('livewire.admin.insurance-company-read');
    }
}
