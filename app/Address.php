<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function order()
    {
        return $this->hasMany(order::class);
    }
}
