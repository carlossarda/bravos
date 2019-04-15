<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinheiro extends Model
{
    protected $table = 'dinheiro';

    protected function personagem(){
        $this->hasOne('Personagem');
    }
}
