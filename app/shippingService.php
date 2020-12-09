<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shippingService extends Model
{
    public function order()
    {
        return $this->hasMany(order::class);
    }
}
