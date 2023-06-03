<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'street',
        'order_notes',
        'payment_method',
        'order_details',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
