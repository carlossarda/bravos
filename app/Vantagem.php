<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vantagem extends Model
{
    protected $table = 'vantagens';

    protected function personagens(){
        return $this->hasMany('VantagemPersonagem');
    }
    protected function racas(){
        return $this->hasMany('VantagemRaca');
    }
}
