<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desvantagem extends Model
{
    protected $table = 'desvantagens';

    public function personagens(){
        return $this->hasMany('DesvantagemPersonagem');
    }
    public function racas(){
        return $this->hasMany('DesvantagemRaca');
    }
}
