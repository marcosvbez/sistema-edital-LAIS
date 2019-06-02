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

    public function create()
    {
        return view('tipoVinculos.create');

    }

    public function store()
    {
        $tipoVinculo = new TipoVinculo();

        $tipoVinculo->ds_vinculacao = request('ds_vinculacao');
        $tipoVinculo->ds_tipo = request('ds_tipo');
        $tipoVinculo->ds_subtipo = request('ds_subtipo');

        $tipoVinculo->save();

        return redirect('/vinculos');

    }
}
