<?php

namespace App\Livewire\Admin;

use App\Models\Deduction;
use App\Models\Gps;
use Livewire\Component;
use Livewire\WithPagination;

class GpsCompanyDeductions extends Component
{
    use WithPagination;
    public $gps;
    public $gps_id;
    public $company;

    public function mount()
    {
        $this->gps_id = Gps::where('company_id',$this->company->id)->where('gps_id',$this->gps->id)->first()->id;
    }

    public function render()
    {
        return view('livewire.admin.gps-company-deductions',[
            'deductions' => Deduction::where('gps_id', $this->gps_id)->paginate(15)
        ]);
    }
}
