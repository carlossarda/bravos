<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Caracteristica;

class StatusController extends Controller
{
    public function allStatus()
    {
        $status = Caracteristica::all();
        return response()->json($status);
    }

    public function status($id)
    {
        $status = Caracteristica::where('caracteristica_id',$id)->get();
        return response()->json($status);
    }
}