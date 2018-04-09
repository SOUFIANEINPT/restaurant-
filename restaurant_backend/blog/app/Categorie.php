<?php

namespace App;
use App\Tabel;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function tables()
    {
        return $this->belongsToMany('App\Tabel');
    }
}
