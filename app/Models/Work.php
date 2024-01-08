<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;


class Work extends Model
{
    use HasFactory, ModelTrait;

    protected $fillable = [
        'category_id',
        'reference',
        'contract_id',
        'sub_contract_id',
        'driver_id',
        'truck_id',
        'started_at',
        'completed_at',
        'loads',
        'loads_completed',
        'price_mile',
        'miles',
        'amount',
        'user_id'

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function contract()
    {
        return $this->belongsTo(Company::class);
    }

    public function sub_contract()
    {
        return $this->belongsTo(Company::class);
    }

    public function completed()
    {
        return $this->completed_at();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }

    public function payrolls()
    {
        return $this->belongsToMany(Payroll::class);
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where('reference', 'like', $term)
        ->orWhereHas('category', function ($query) use ($term) {
            $query->where('name', 'like', $term);
        })->orWhereHas('contract', function ($query) use ($term) {
            $query->where('name', 'like', $term);
        })->orWhereHas('sub_contract', function ($query) use ($term) {
            $query->where('name', 'like', $term);
        })->orWhereHas('driver', function ($query) use ($term) {
            $query->where('name', 'like', $term);
        })->orWhereHas('truck', function ($query) use ($term) {
            $query->where('key', 'like', $term);
        })->orWhere('started_at', 'like', $term)
        ->orWhere('completed_at','like',$term)
        ->orWhere('amount','like',$term)
        ;
    }
}
