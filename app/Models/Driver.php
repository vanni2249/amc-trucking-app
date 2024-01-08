<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'is_actived'
    ];

    public $timestamps = false;

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
