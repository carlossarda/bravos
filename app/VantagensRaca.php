<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VantagensRaca extends Model
{
    protected $table = 'vantagens_raca';

    protected function vantagem(){
        return $this->belongsTo('App\Vantagem');
    }

    protected function raca(){
        return $this->belongsTo('App\Raca');
    }
}
