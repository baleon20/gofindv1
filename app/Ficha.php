<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Programa;

class Ficha extends Model
{
protected $fillable = ['fechainicio', 'fechafinal', 'idprogramas'];

public function Programa ()
{
	return $this->belongsTo('App\Programa', 'idprogramas', 'id');
}

public function FichaEgresado()
  {
  	return $this->hasMany('App\FichaEgresado', 'idfichas', 'id');
  }
}
