<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderProduct extends Model
{

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    //
    public function product()
    {
        return $this->belongsTo(product::class);
    }

}
