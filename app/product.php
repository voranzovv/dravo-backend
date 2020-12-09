<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{


    public function orderProduct()
    {
        return $this->hasMany(orderProduct::class);
    }

}
