<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Salerecords extends Model
{
    protected $table = "salerecords";
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
