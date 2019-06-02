<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cbo;

class CbosController extends Controller
{
    public function index()
    {


        $cbos = Cbo::all();

        return view('cbos.index', compact('cbos'));

    }

    public function store()
    {
        $cbo = new CBO();
        $cbo->cbo_descricao = request('cbo_descricao');
        $cbo->cbo_codigo = request('cbo_codigo');

        $cbo->save();

        return redirect('/vinculos');

    }

    public function create()
    {
        return view('cbos.create');

    }
}
