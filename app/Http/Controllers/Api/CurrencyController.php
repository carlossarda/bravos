<?php


namespace App\Http\Controllers\Api;


use App\Dinheiro;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function allCurrencies()
    {
        $moedas = Dinheiro::all();
        return response()->json($moedas);
    }

    public function currency($id)
    {
        $moeda = Dinheiro::where('dinheiro_id', $id)->get();
        return response()->json($moeda);
    }

}