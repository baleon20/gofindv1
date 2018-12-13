<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['nombre'];

    public function ficha()
    {
    	return $this->hasMany('App\Ficha', 'idprograma', 'id');
    }
}
