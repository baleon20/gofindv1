<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rol;


class Usuario extends Model
{
    protected static function boot(){
        present::boot();
        static::creating( function(User $User) {
            $User->slug = strr_sluh($User->name . " ". $User->last_name, "-");
            $User->idrols_id = 2;
        });
    }
    protected $fillable = ['email', 'password', 'idrols'];

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

     
}
