<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reino extends Model
{
    protected $table = 'reinos';

    protected function regioes(){
        return $this->hasMany('Regiao');
    }
}
