<?php

namespace App;

use App\Beca;
use App\Alumnomaestria;
use App\Alumnopregrado;
use App\Alumnodoctorado;
use Illuminate\Database\Eloquent\Model;

class Operacionb extends Model
{
    //
    protected $fillable = [
    	'quantity',
    	'user_id',
    	'beca_id',
    	
    ];

    public function Alumnodoctorado()
    {
    	return $this->belongsTo(Alumnodoctorado::class);
    }

    public function Alumnomaestria()
    {
    	return $this->belongsTo(Alumnomaestria::class);
    }

    public function Alumnopregrado()
    {
    	return $this->belongsTo(Alumnopregrado::class);
    }

    public function Beca()
    {
    	return $this->belongsTo(Beca::class);
    }

}
