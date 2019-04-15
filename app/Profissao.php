<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    protected $table = 'profissoes';

    protected function personagens(){
        $this->hasMany('Personagem');
    }
}
