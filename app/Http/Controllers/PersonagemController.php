<?php

namespace App\Http\Controllers;

use App\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function listaPersonagens(){
        $personagens = Personagem::all();
        return json_encode($personagens);
    }

    public function listaPersonagem($id_personagem){
        $personagem = Personagem::find($id_personagem);
        return \GuzzleHttp\json_encode($personagem);
    }
}
