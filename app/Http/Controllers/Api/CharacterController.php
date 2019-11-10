<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Personagem;

class CharacterController extends Controller
{
    public function allCharacters()
    {
        $personagens = Personagem::all();
        return response()->json($this->toApi($personagens));
    }

    public function character($id)
    {
        $personagem = Personagem::where('personagem_id',$id)->get();
        return response()->json($personagem);
    }

    private function toApi($personagens)
    {

        $return = [];

        foreach ($personagens as $key => $personagem) {
            $char["name"]       = $personagem->nome;
            $char["age"]        = $personagem->idade;
            $char["level"]      = $personagem->nivel;
            $char["weight"]     = $personagem->peso;
            $char["height"]     = $personagem->altura;
            $char["experience"] = $personagem->experiencia;
            $char["race"]       = $personagem->raca->nome;
            $char["profession"] = $personagem->profissao->nome;
            $char["religion"]   = $personagem->religiao->nome;

            $return[] = $char;
        }

        return $return;
    }
}