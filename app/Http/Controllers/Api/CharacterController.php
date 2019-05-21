<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Personagem;

class CharacterController extends Controller
{
    public function allCharacters()
    {
        $personagens = Personagem::all();
        return response()->json($personagens);
    }

    public function character($id)
    {
        $personagem = Personagem::where('personagem_id',$id)->get();
        return response()->json($personagem);
    }
}