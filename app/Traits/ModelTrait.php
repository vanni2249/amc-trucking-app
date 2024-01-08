<?php
 
namespace App\Traits;

use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Number;

trait ModelTrait{

    public function started_at()
    {
        return CarbonImmutable::parse($this->started_at)->toFormattedDayDateString();
    }

    public function completed_at()
    {
        return CarbonImmutable::parse($this->completed_at)->toFormattedDayDateString();
    }

    public function amount()
    {
        return Number::currency($this->amount)??'';
    }

    public function created_at()
    {
        return CarbonImmutable::parse($this->created_at)->toDayDateTimeString();
    }

    public function updated_at()
    {
        return CarbonImmutable::parse($this->updated_at)->toDayDateTimeString();
    }

    public function made_at()
    {
        return CarbonImmutable::parse($this->made_at)->toFormattedDayDateString();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
