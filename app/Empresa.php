<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Ciudad;

class Empresa extends Model
{
    protected  $fillable = ['nombre', 'telefono', 'direccion', 'NIT', 'idusuario'];


 
  public function User ()
  {
  	return $this->belongsTo('App\User', 'idempresa', 'id');
  }
}
