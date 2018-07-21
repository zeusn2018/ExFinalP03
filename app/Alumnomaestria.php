<?php

namespace App;

use App\Beca;
use App\Operacionb;



class Alumnomaestria extends User
{
    public function Operacionesmaestria()
    {
    	return $this->hasMany(Operacionb::class);
    }

    public function Becamaestria()
    {
    	return $this->hasMany(Beca::class);
    }
}
