<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NivelEstudio;
use App\Egresado;
class Estudio extends Model
{
    protected  $fillable = ['titulo', 'institucion', 'duracion', 'fecha', 'idnivel_estudios', 'idegresados'];


  public function NivelEstudio ()
  {
  	return $this->belongsTo('App\NivelEstudio', 'idnivel_estudios', 'id');
  }

   public function Egresado ()
  {
  	return $this->belongsTo('App\Egresado', 'idegresado', 'id');
  }

}
