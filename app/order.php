<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function address()
    {
        return $this->belongsTo(address::class);
    }
    public function shippingService()
    {
        return $this->belongsTo(shippingService::class);
    }
    public function orderProduct()
    {
        return $this->hasMany(orderProduct::class);
    }



}
