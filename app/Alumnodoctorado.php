<?php

namespace App;

use App\Beca;
use App\Operacionb;


class Alumnodoctorado extends User
{
    public function Operacionesdoctorado()
    {
    	return $this->hasMany(Operacionb::class);
    }


    public function Becadoctorado()
    {
    	return $this->hasMany(Beca::class);
    }
}
