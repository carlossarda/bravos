<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    protected function personagens(){
        $this->hasMany('Personagem');
    }

    protected function vantagens(){
        $this->hasMany('VantagemRaca');
    }
}
