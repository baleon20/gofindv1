<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Area;
use App\Empresa;
use App\Ciudad;


class Vacante extends Model
{
     protected $fillable = ['nombre', 'fechainicio', 'fechafinal', 'descripcion', 'requisito', 'candidatos', 'rangosalarial', 'idareas', 'idempresas', 'idciudad'];
     public function Area ()
    {
    	return $this->belongsTo('App\Area', 'idareas', 'id');
    }

     public function Ciudad ()
    {
    	return $this->belongsTo('App\Ciudad', 'idciudad', 'id');
    }

     public function Empresa ()
    {
    	return $this->belongsTo('App\Empresa', 'idempresas', 'id');
    }

    public function Postulacion ()
    {
    	return $this->hasMany('App\Postulacion', 'idvacantes', 'id');
    }
}
