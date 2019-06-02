<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vinculo;
use App\Cbo;
use App\Profissional;
use App\TipoVinculo;


class VinculosController extends Controller
{
    public function index ()
    {

        $vinculos =Vinculo::all();
        $cbos = Cbo::all();
        $profissionals=Profissional::all();
        $tipoVinculos=TipoVinculo::all();


        return view('vinculos.index',compact('vinculos','cbos','profissionals','tipoVinculos'));
        //return view('vinculos.index')->withVinculos($vinculos)->withCbos($cbos)->withProfissionals($profissionals)->withTipoVinculos($tipoVinculos);
    }


    
    
    public function create()
    {
        $cbos = Cbo::all();
        $profissionals=Profissional::all();
        $tipoVinculos=TipoVinculo::all();

        return view('vinculos.create')->withCbos($cbos)->withProfissionals($profissionals)->withTipoVinculos($tipoVinculos);
    }


    public function store()
    {
        $vinculo = new Vinculo();
        $vinculo->ch_total = request('ch_total');
        $vinculo->cbo_id = request('cbo_id');
        $vinculo->tipo_vinculo_id = request('tipo_vinculo_id');
        $vinculo->profissional_id = request('profissional_id');

        $vinculo->save();

        return redirect('/vinculos');

    }

    public function show($id)
    {
        $vinculo = Vinculo::find($id);

        $cbo = Cbo::find($vinculo->cbo_id);

        $profissional=Profissional::find($vinculo->profissional_id);
        $tipoVinculo=TipoVinculo::find($vinculo->tipo_vinculo_id);

        return view('vinculos.show',compact('vinculo','cbo','profissional','tipoVinculo'));
    }

    public function edit($id)
    {

        $vinculo = Vinculo::findOrFail($id);

        $cbos = Cbo::all();
        $profissionals=Profissional::all();
        $tipoVinculos=TipoVinculo::all();

        return view('vinculos.edit',compact('vinculo','cbos','profissionals','tipoVinculos'));
    }


    public function update($id)
    {
        $vinculo = Vinculo::findOrFail($id);
        $vinculo->ch_total = request('ch_total');
        $vinculo->cbo_id = request('cbo_id');
        $vinculo->tipo_vinculo_id = request('tipo_vinculo_id');
        $vinculo->profissional_id = request('profissional_id');
        $vinculo->save();

        return redirect('/vinculos');

    }

    public function destroy($id)
    {
        $vinculo= Vinculo::findOrFail($id)->delete();
        return redirect('/vinculos');
    }

}
