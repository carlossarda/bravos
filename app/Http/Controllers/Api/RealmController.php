<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Reino;

class RealmController extends Controller
{
    public function allRealms()
    {
        $reinos = Reino::all();
        return response()->json($reinos);
    }

    public function realm($id)
    {
        $reino = Reino::where('reino_id', $id)->get();
        return response()->json($reino);
    }
}
