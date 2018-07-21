<?php

namespace App;

use App\Alumnomaestria;
use App\Alumnopregrado;
use App\Alumnodoctorado;
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

    public function Operacionespregrado()
    {
        return $this->belongsTo(Alumnopregrado::class);
    }

    public function Operacionesmaestria()
    {
        return $this->belongsTo(Alumnomaestria::class);
    }

    public function Operacionesdoctorado()
    {
        return $this->belongsTo(Alumnodoctorado::class);
    }


    public function Operacionesbeca()
    {
        return $this->hasMany(Operacionb::class);
    }



}
