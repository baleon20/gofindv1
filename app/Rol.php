<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['nombre'];


    public function usuario ()
    {
    	return $this->hasMany('App\suario', 'idrols', 'id');
    }
}
