<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    protected $fillable = ['nombre'];

    public function Estudio()
    {
    	return $this->hasMany('App\Estudio', 'idnivel_estudios', 'id');
    }
}
