<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Fuel extends Model
{
    protected $fillable = [
        'fuel_type_id',
        'state_id',
        'station_id',
        'company_id',
        'driver_id',
        'card_id',
        'truck_id',
        'vehicle_id',
        'fuel_unit_id',
        'units',
        'price_unit',
        'discount',
        'amount',
        'made_at',
        'user_id',
    ];
    use HasFactory, ModelTrait;

    public function payments()
    {
        return $this->belongsToMany(Payment::class);
    }
    public function fuel_type()
    {
        return $this->belongsTo(Category::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

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

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function payrolls()
    {
        return $this->belongsToMany(Payroll::class);
    }

    public function fuel_unit()
    {
        return $this->belongsTo(Category::class);
    }

    public function price_unit() 
    {
        return Number::currency($this->price_unit??'0')??'';    
    }

    public function made_at()
    {
        return CarbonImmutable::parse($this->made_at)->toFormattedDayDateString();
    }

    public function discount()
    {
        return Number::currency($this->discount??'0');
    }
    
}
