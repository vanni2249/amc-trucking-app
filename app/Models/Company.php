<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
    ];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);    
    }

    public function contract_works()
    {
        return $this->hasMany(Work::class,'contract_id');
    }
    
    public function sub_contract_works()
    {
        return $this->hasMany(Work::class,'sub_contract_id');
    }
    

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function insurances()
    {
        return $this->hasMany(Insurance::class);
    }
  
    public function gps()
    {
        return $this->hasMany(Gps::class);
    }
}
