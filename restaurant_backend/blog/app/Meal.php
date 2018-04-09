<?php

namespace App;
use App\Resrvation;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function reservtions()
    {
        return $this->hasMany('App\Resrvation');
    }
}
