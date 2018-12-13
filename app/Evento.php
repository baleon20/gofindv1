<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
   protected $fillable = ['nombre', 'descripcion', 'fechaevento', 'lugar', 'direccion'];

    public function TipoEvento()
    {
    	return $this->hasMany('App\TipoEvento', 'ideventos', 'id');
    }
}
