<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Loan extends Model
{
    protected  $fillable = [
        'company_id',
        'made_at',
        'amount',
        'user_id'
    ];
    use HasFactory, ModelTrait;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }

    public function acumulated()
    {
        return $this->deductions()->sum('amount');
    }

    public function balance()
    {
        return Number::currency($this->amount - $this->deductions()->sum('amount'));
    }
}
