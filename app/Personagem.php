<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = 'personagens';

    protected function raca() {
        return $this->belongsTo('App\Raca','raca_id','raca_id');
    }

    protected function religiao() {
        return $this->belongsTo('App\Religiao','religiao_id','religiao_id');
    }

    protected function profissao() {
        return $this->belongsTo('App\Profissao','profissao_id','profissao_id');
    }

}
