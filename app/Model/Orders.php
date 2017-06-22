<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\Model\User');
    }

    public function incomes()
    {
        return $this->hasMany('App\Model\Items');
    }

    public function orderManipulations()
    {
        return $this->hasMany('App\Model\Order_manipulations');
    }
}
