<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Egresado;
class Experiencia extends Model
{
    protected  $fillable = ['organizacion', 'fechainicio', 'fechafinal', 'cargo', 'descripcion', 'adjunto', 'idegresados'];


  public function Egresado ()
  {
  	return $this->belongsTo('App\Egresado', 'idegresados', 'id');
  }

  
}
