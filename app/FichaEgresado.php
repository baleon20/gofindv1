<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ficha;
use App\Egresado;

class FichaEgresado extends Model
{
     protected  $fillable = ['fechaegresado', 'idfichas', 'idegresados'];


  public function Ficha ()
  {
  	return $this->belongsTo('App\Ficha', 'idfichas', 'id');
  }
   public function Egresado ()
  {
  	return $this->belongsTo('App\Egresado', 'idegresados', 'id');
  }

}
