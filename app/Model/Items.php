<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = "items";
    public function order_manipulations()
    {
        return $this->hasMany('App\Model\Order_manipulations');
    }
}
