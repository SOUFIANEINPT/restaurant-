<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Menu extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function AllMenu()
    {
        return Menu::all();
    }
}
