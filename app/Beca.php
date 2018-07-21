<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beca extends Model
{
	const BECA_DISPONIBLE = 'disponible';
	const BECA_NO_DISPONIBLE = 'no disponible';

    protected $fillable = [
    	'name',
    	'descripcion',
    	'quantity',
    	'status',
    	'user_id',
    ];

    public function estaDisponible()
    {
    	return $this->status == Beca::BECA_DISPONIBLE;
    }


}
