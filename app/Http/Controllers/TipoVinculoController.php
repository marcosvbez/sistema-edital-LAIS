<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipoVinculo;

class TipoVinculoController extends Controller
{
    public function index()
    {
        $tipoVinculos =TipoVinculo::all();

        return view('tipoVinculos.index',compact('tipoVinculos'));

    }
}
