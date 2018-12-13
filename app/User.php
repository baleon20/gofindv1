<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Rol;
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email', 'password'];

    protected static function boot(){
        parent::boot();
        static::creating( function(User $User) {
           
            $User->idrols = 1;
        });
    }
        
    

    public function Rol ()
    {
        return $this->belongsTo('App\Rol', 'idrols', 'id');
    }

    public function Egresado ()
    {
        return $this->hasMany('App\Egresado', 'idusuarios', 'id');
    }
    public function Empresa ()
    {
        return $this->hasMany('App\Empresa', 'idusuario', 'id');
    }


    /**
     * The attributes that are mass assignable.
     *
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
