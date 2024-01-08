<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'vin',
        'key',
        'lic',
        'is_actived'
    ];

    public $timestamps = false;

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
