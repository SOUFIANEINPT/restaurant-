<?php

namespace App;
use App\Menu;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function menus()
    {
       return $this->belongsToMany('App\Menu');
    }
}
