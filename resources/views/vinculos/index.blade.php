@extends('layouts.general')

@section('title','Vinculos')
@section('name','Lista de Vínculos')



@section('content')



    <div align="right">
        <a href="/vinculos/create">
            <button type = "button" class ="btn-outline-dark ">
                Novo
            </button >
        </a>

        <hr style = "background-color: black" >
    </div>

    <div class="row">
        <div class="col-sm-3">  </div>
        <div class="col-sm-6">
            <div  class="table-responsive">
                <table  class="table table-responsive-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Ch total</th>
                        <th>Cbo</th>
                        <th>Tipo vinculo</th>
                        <th>Profissional</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vinculos as $vinculo)
                        <tr>
                            <th>{{$vinculo->ch_total}}</th>
                            <th>
                                @foreach($cbos as $cbo)
                                    @if($vinculo->cbo_id == $cbo->id)
                                        {{$cbo->cbo_descricao}}
                                    @endif
                                @endforeach

                            </th>
                            <th>
                                @foreach($tipoVinculos as $tipoVinculo)
                                    @if($vinculo->tipo_vinculo_id == $tipoVinculo->id)
                                        {{$tipoVinculo->ds_tipo}}
                                    @endif
                                @endforeach
                            </th>
                            <th>
                                @foreach($profissionals as $profissional)
                                    @if($vinculo->profissional_id == $profissional->id)
                                        {{$profissional->nome}}
                                    @endif
                                @endforeach
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-3">  </div>
    </div>
@endsection