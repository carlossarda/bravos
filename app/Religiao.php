<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religiao extends Model
{
    protected $table = 'religioes';

    protected function personagens(){
        return $this->hasMany('Personagem');
    }
}
