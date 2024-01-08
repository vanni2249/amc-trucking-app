<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Payment extends Model
{
    protected $fillable = [
        'amount',
        'type_payment_id',
        'made_at',
        'user_id'
    ];

    use HasFactory, ModelTrait;

    public function insurances()
    {
        return $this->belongsToMany(Insurance::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function amount()
    {
        return Number::currency($this->amount);
    }

    public function made_at()
    {
        return CarbonImmutable::parse($this->made_at)->toFormattedDateString();
    }

    public function type_payment()
    {
        return $this->belongsTo(Category::class);
    }

    public function fuels()
    {
        return $this->belongsToMany(Fuel::class);
    }

    public function sum_fuels()
    {
        return Number::currency($this->fuels()->sum('amount'));
    }

    public function diference_balance()
    {
        return Number::currency($this->amount - $this->fuels()->sum('amount'));
    }
}
