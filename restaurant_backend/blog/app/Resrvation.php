<?php

namespace App;
use Illuminate\Support\Facades\DB;
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
    public function DeletReservExp()
    {
        $date =  new \DateTime('now');
        $tosub = new \DateInterval('PT01H00M');
        $date=$date->sub($tosub);
        $date=$date->format('Y-m-d H:i:s');
        DB::table('resrvations')->where('dateFin','<=',$date)->
        update(['experation' => true]);
    }
}
