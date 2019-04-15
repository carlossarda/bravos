<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesvantagensPersonagem extends Model
{
    protected $table = 'desvantagens_personagem';

    protected function desvantagem(){
        return $this->belongsTo('App\Desvantagem');
    }

    protected function personagem(){
        return $this->belongsTo('App\Personagem');
    }
}
