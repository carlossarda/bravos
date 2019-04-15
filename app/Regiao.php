<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regioes';

    protected function reino(){
        return $this->hasOne('Reino');
    }
}
