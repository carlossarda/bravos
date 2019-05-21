<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Vantagem;

class AdvantageController extends Controller
{
    public function allAdvantages()
    {
        $vantagens = Vantagem::all();
        return response()->json($vantagens);
    }

    public function advantage($id)
    {
        $vantagem = Vantagem::where('vantagem_id', $id)->get();
        return response()->json($vantagem);
    }
}