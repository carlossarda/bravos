<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Religiao;

class ReligionController extends Controller
{
    public function allReligions()
    {
        $religioes = Religiao::all();
        return response()->json($religioes);
    }

    public function religion($id)
    {
        $religiao = Religiao::where('religiao_id',$id)->get();
        return response()->json($religiao);
    }
}