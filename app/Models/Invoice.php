<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Invoice extends Model
{
    protected $fillable = [
        'reference',
        'contract_id',
        'started_at',
        'completed_at',
        'paid_at',
        'user_id',
    ];
    use HasFactory, ModelTrait;

    public function contract()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function works()
    {
        return $this->belongsToMany(Work::class);
    }

    public function paid_at()
    {
        return CarbonImmutable::parse($this->paid_at)->toFormattedDayDateString();
    }

    public function amount()
    {
        return Number::currency($this->works()->sum('amount'));
    }

    public function week()
    {
        return CarbonImmutable::parse($this->completed_at)->week();
    }

    public function works_amount_sum()
    {
        return Number::currency($this->works()->sum('amount'));
    }

}
