<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'number',
        'key',
        'station_id',
        'name',
        'company_id',
        'driver_id',
        'truck_id',
        'is_actived',
        'user_id'
    ];
    use HasFactory, ModelTrait;

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
