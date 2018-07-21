<?php

namespace App;

use App\Beca;
use App\Operacionb;



class Alumnopregrado extends User
{
    public function Operacionespregrado()
    {
    	return $this->hasMany(Operacionb::class);
    }


    public function Becapregrado()
    {
    	return $this->hasMany(Beca::class);
    }
}
