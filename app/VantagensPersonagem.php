<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VantagensPersonagem extends Model
{
    protected $table = 'vantagens_personagem';

    protected function vantagem(){
        return $this->belongsTo('App\Vantagem');
    }

    protected function personagem(){
        return $this->belongsTo('App\Personagem');
    }
}
