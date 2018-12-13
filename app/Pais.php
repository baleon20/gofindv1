<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['name'];

    public function Departamento()
    {
    	return $this->hasMany('App\Departamento', 'idpais', 'id');
    }
}
