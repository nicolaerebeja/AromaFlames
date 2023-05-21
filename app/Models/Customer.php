<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'orders',
        'details',
        'source',
        'address',
        'data_registered',
        'sex',
    ];

    public function getFormattedDataRegisteredAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->data_registered)->format('d/m/Y');
    }

}
