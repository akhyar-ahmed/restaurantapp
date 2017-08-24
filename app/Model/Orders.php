<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";
    public function user()
    {
    	return $this->belongsTo('App\Model\User');
    }

    public function income()
    {
        return $this->hasOne('App\Model\Incomes');
    }

    public function order_manipulations()
    {
        return $this->hasMany('App\Model\Order_manipulations');
    }
}
