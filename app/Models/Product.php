<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'stock', 'description_id', 'info', 'images'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function description()
    {
        return $this->belongsTo(Description::class, 'description_id');
    }
}
