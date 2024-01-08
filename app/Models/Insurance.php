<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Insurance extends Model
{
    use HasFactory, ModelTrait;

    protected $fillable = [
        'reference',
        'insurance_id',
        'company_id',
        'started_at',
        'completed_at',
        'amount',
        'user_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function insurances()
    {
        return $this->hasMany(Insurance::class);
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }

    public function payments()
    {
        return $this->belongsToMany(Payment::class);
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }

    public function gross()
    {
        return Number::currency($this->insurances()->sum('amount'));
    }

    public function sum_deductions()
    {
        return Number::currency($this->deductions()->sum('amount'));
    }

    public function sum_payments()
    {
        return Number::currency($this->payments()->sum('amount'));
    }

    public function balance_company()
    {
        return Number::currency($this->amount - $this->deductions()->sum('amount'));
    }

    // public function started_at()
    // {
    //     return CarbonImmutable::parse($this->started_at)->toFormattedDateString();
    // }
    // public function completed_at()
    // {
    //     return CarbonImmutable::parse($this->completed_at)->toFormattedDateString();
    // }
}
