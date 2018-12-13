<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TipoDocumento extends Model
{
    protected $fillable = ['nombre'];

    public function Egresado ()
    {
    	return $this->hasMany('App\Egresado', 'idtipo_documentos', 'id');
    }
}
