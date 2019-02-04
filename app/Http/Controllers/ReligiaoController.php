<?php

namespace App\Http\Controllers;

use App\Religiao;
use Illuminate\Http\Request;

class ReligiaoController extends Controller
{
    public function listaReligiao()
    {
        $religiao = Religiao::all();
        return view('religiao.lista')->with('religiao', $religiao);
    }

    public function editaReligiao($id)
    {
        $religiao = Religiao::find($id);
        return view('religiao.formulario')->with('religiao', $religiao);
    }
}
