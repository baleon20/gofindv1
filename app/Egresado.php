<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoDocumento;
use App\Ciudad;
use App\Usuario;

class Egresado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'telefono', 'direccion', 'email', 'fechanacimiento', 'sexo', 'estrato', 'idtipo_documentos', 'idusuarios'];

    public function tipodocumento ()
    {
    	return $this->belongsTo('App\TipoDocumento', 'idtipo_documentos', 'id');
    }
   
    public function usuario ()
    {
    	return $this->belongsTo('App\User', 'idusuarios', 'id');
    }

     public function Postulacion ()
    {
        return $this->hasMany('App\Postulacion', 'idegresados', 'id');
    }

     public function Experiencia ()
    {
        return $this->hasMany('App\Experiencia', 'idegresados', 'id');
    }

    public function FichaEgresado()
    {
    return $this->hasMany('App\FichaEgresado', 'idegresados', 'id');
    }

  public function Estudio()
    {
        return $this->hasMany('App\Estudio', 'idegresados', 'id');
    }
}
