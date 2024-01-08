<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'key',
        'category_id'
    ];

    public $timestamps = false;

    public function categories()
    {
        return $this->HasMany(Category::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
