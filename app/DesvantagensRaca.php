<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesvantagensRaca extends Model
{
    protected $table = 'desvantagens_raca';

    protected function desvantagem(){
        return $this->belongsTo('App\Desvantagem');
    }

    protected function raca(){
        return $this->belongsTo('App\Raca');
    }
}
