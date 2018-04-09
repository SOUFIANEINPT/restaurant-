<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Resrvation;
use App\Facture;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role()
    {
        return $this->hasOne('App\Role');
    }
    public function isSuperAdmin()
    {
        if($this->role_id===1)
        return true;
        return false;
    }
    
    public function reservations()
    {
        return $this->hasMany('App\Resrvation');
    }
    public function factures()
    {
        return $this->hasMany('App\Facture');
    }
}
