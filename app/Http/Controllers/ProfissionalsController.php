<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profissional;

class ProfissionalsController extends Controller
{
    public function index()
    {


        $profissionals =Profissional::all();

        return view('profissionals.index',compact('profissionals'));

    }

    /**
     * @param array $middleware
     */
    public function create()
    {
        return view('profissionals.create');

    }

    public function store()
    {
        $profissional = new Profissional();

        $profissional->nome = request('nome');
        $profissional->CNS = request('CNS');
        $profissional->data_atribuicao = request('data_atribuicao');
        $profissional->sus = request('sus');

        $profissional->save();

        return redirect('/profissionals');

    }
}
