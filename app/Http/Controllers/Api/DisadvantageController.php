<?php


namespace App\Http\Controllers\Api;

use App\Desvantagem;
use App\Http\Controllers\Controller;

class DisadvantageController extends Controller
{
    public function allDisadvantages()
    {
        $desvantagens = Desvantagem::all();
        return response()->json($desvantagens);
    }

    public function disadvantage($id)
    {
        $desvantagem = Desvantagem::where('desvantagem_id', $id)->get();
        return response()->json($desvantagem);
    }

}