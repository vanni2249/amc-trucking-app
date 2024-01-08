<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Gps extends Model
{
    protected $fillable = [
        'company_id',
        'gps_id',
        'started_at',
        'completed_at',
        'amount',
        'user_id'
    ];
    use HasFactory, ModelTrait;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function gpses()
    {
        return $this->hasMany(Gps::class);
    }

    public function gps()
    {
        return $this->belongsTo(Gps::class);
    }

    public function main_deductions()
    {
        return $this->hasManyThrough(Deduction::class,Gps::class,'gps_id','gps_id','id','id');
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }

    public function sum_main_amount()
    {
        return Number::currency($this->gpses()->sum('amount'));
    }

    public function sum_main_deductions()
    {
        return Number::currency($this->main_deductions()->sum('deductions.amount'));
    }

    public function main_balance()
    {
        return Number::currency($this->gpses()->sum('amount') - $this->main_deductions()->sum('deductions.amount'));
    }

    public function sum_selft_deductions()
    {
        return Number::currency($this->deductions()->sum('amount'));
    }

    public function balance_selft()
    {
        return Number::currency($this->amount - $this->deductions()->sum('amount'));
    }
}
