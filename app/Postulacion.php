<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vacante;
use App\Egresado;

class Postulacion extends Model
{
     protected $fillable = ['fechapostulacion', 'idvacantes', 'idegresados'];

     public function Vacante ()
    {
    	return $this->belongsTo('App\Vacante', 'idvacantes', 'id');
    }
     public function Egresado ()
    {
    	return $this->belongsTo('App\Egresado', 'idegresados', 'id');
    }

    
}
