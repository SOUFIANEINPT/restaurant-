<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resrvation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function table()
    {
        return $this->belongsTo('App\Table');
    }
}
