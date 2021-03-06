<?php

namespace App\Http\Controllers;

use App\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function listaPersonagens(){
        $personagens = Personagem::all();
        return view()->json($personagens);
    }

    public function listaPersonagem($id){
        $personagem = Personagem::where('personagem_id',$id)->get();

        return view()->json($personagem);
    }
}
