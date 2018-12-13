<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departamento;

class Departamento extends Model
{
  protected  $fillable = ['nombre', 'idpais'];


  public function Pais ()
  {
  	return $this->belongsTo('App\Pais', 'idpais', 'id');
  }


  public function Ciudad()
  {
  	return $this->hasMany('App\Ciudad', 'iddepartamento', 'id');
  }
}
