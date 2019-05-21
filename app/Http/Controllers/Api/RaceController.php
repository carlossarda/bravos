<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Raca;

class RaceController extends Controller
{
    public function allRaces()
    {
        $races = Raca::all();
        return response()->json($races);
    }

    public function race($id)
    {
        $race = Raca::where('raca_id', $id)->get();
        return response()->json($race);
    }
}