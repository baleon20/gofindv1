<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
   protected $fillable = ['nombre'];

    public function Vacante ()
    {
    	return $this->hasMany('App\Area', 'idareas', 'id');
    }
}
