<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Payroll extends Model
{
    use HasFactory, ModelTrait;
    
    protected $fillable = [
        'contract_id',
        'started_at',
        'completed_at',
        'paid_at',
        'view_at',
        'user_id',
    ];


    public function contract()
    {
        return $this->belongsTo(Company::class);
    }

    public function works()
    {
        return $this->belongsToMany(Work::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }

    public function fuels()
    {
        return $this->belongsToMany(Fuel::class);
    }

    public function paid_at()
    {
        return CarbonImmutable::parse($this->paid_at)->toFormattedDayDateString();
    }

    public function view_at()
    {
        return CarbonImmutable::parse($this->view_at)->toDayDateTimeString();
    }

    public function amount_works()
    {
        return Number::currency($this->works()->sum('amount'));
    }
    
    public function amount_deductions()
    {
        return Number::currency($this->deductions()->sum('amount'));
    }

    public function amount_fuels()
    {
        return Number::currency($this->fuels()->sum('amount'));
    }

    public function amount_net()
    {
        return Number::currency($this->works()->sum('amount') - $this->deductions()->sum('amount') - $this->fuels()->sum('amount'));
    }

    public function week()
    {
        return CarbonImmutable::parse($this->completed_at)->week();
    }
   
    public function insuraces()
    {
        return $this->belongsToMany(Insurance::class);
    }
}
