<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = 'description_product';

    protected $fillable = ['description'];

    public function products()
    {
        return $this->hasMany(Product::class, 'description_id');
    }
}
