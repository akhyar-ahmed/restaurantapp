<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public function orderManipulations()
    {
        return $this->hasMany('App\Model\Order_manipulations');
    }
}
