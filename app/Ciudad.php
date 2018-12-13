<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departamento;
class Ciudad extends Model
{
    protected  $fillable = ['nombre', 'iddepartamento', ];


  public function Departamento ()
  {
  	return $this->belongsTo('App\Departamento', 'iddepartamentos', 'id');
  }

  

  
}
