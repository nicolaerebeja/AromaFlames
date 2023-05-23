<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'client_id');
    }

    public function getFormattedOrderDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->order_date)->format('d/m/Y');
    }


    public function getFormattedDeliveryDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->delivery_date)->format('d/m/Y');
    }
}
