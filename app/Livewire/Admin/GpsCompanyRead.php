<?php

namespace App\Livewire\Admin;

use App\Models\Gps;
use Livewire\Component;

class GpsCompanyRead extends Component
{
    public $gps;
    public $company;

    public function render()
    {
        return view('livewire.admin.gps-company-read',[
            'item' => Gps::where('company_id',$this->company->id)->where('gps_id',$this->gps->id)->first()
        ]);
    }
}
