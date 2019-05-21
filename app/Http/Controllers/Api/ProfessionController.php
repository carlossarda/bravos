<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Profissao;

class ProfessionController extends Controller
{
    public function allProfessions()
    {
        $profissoes = Profissao::all();
        return response()->json($profissoes);
    }

    public function profession($id)
    {
        $profissao = Profissao::where('profissao_id', $id)->get();
        return response()->json($profissao);
    }
}