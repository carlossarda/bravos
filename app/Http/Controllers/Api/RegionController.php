<?php


namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Regiao;

class RegionController extends Controller
{
    public function allRegions()
    {
        $regioes = Regiao::all();
        return response()->json($regioes);
    }

    public function region($id)
    {
        $regiao = Regiao::where('regiao_id', $id)->get();
        return response()->json($regiao);
    }

}