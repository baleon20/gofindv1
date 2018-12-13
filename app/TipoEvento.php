<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evento;

class TipoEvento extends Model
{
    protected $fillable = ['nombre', 'ideventos'];

    public function Evento ()
    {
    	return $this->belongsTo('App\Evento', 'ideventos', 'id');
    }
}
