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
        <div class="col-sm-1">  </div>
        <div class="col-sm-10">

                <select class="form-control" id="target" style="margin-bottom: 2%">
                <option value ="1" selected>Registros</option>
                <option value="2">Tipo</option>
                <option value="3">CBO</option>
                <option value="4">Vinculação</option>

            </select>
            <style>
                .inv {
                    display: none;
                }
            </style>

                    <script>
                        document.getElementById('target').addEventListener('change', function () {
                                    'use strict';
                                    var vis = document.querySelector('.vis'),
                                            target = document.getElementById(this.value);
                                    if (vis !== null) {
                                        vis.className = 'inv';
                                    }
                                    if (target !== null ) {
                                        target.className = 'vis';
                                    }
                                });
                    </script>




            <div  id="1" class="vis">

                <table  class="table table-responsive-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>CNS</th>
                        <th>Data Atribuição</th>
                        <th>CBO</th>
                        <th>Ch total</th>
                        <th>SUS</th>
                        <th>Vinculação</th>
                        <th>Tipo vinculo</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vinculos as $vinculo)
                        <tr>
                            <th>
                                @foreach($profissionals as $profissional)
                                    @if($vinculo->profissional_id == $profissional->id)
                                        {{$profissional->nome}}
                                    @endif
                                @endforeach
                            </th>
                            <th>
                                @foreach($profissionals as $profissional)
                                    @if($vinculo->profissional_id == $profissional->id)
                                        {{$profissional->CNS}}
                                    @endif
                                @endforeach
                            </th>
                            <th>
                                @foreach($profissionals as $profissional)
                                    @if($vinculo->profissional_id == $profissional->id)
                                        {{$profissional->data_atribuicao}}
                                    @endif
                                @endforeach
                            </th>
                            <th>
                                @foreach($cbos as $cbo)
                                    @if($vinculo->cbo_id == $cbo->id)
                                        {{$cbo->cbo_descricao}}
                                    @endif
                                @endforeach

                            </th>
                            <th>{{$vinculo->ch_total}}</th>
                            <th>
                                @foreach($profissionals as $profissional)
                                    @if($vinculo->profissional_id == $profissional->id)
                                        {{$profissional->sus}}
                                    @endif
                                @endforeach
                            </th>
                            <th>
                                @foreach($tipoVinculos as $tipoVinculo)
                                    @if($vinculo->tipo_vinculo_id == $tipoVinculo->id)
                                        {{$tipoVinculo->ds_vinculacao}}
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
                                <a href="/vinculos/{{$vinculo->id}}">
                                    <button type = "button" class ="btn-outline-dark ">
                                        Ver
                                    </button >
                                </a>
                                <a href="/vinculos/{{$vinculo->id}}/edit">
                                    <button type = "button" class ="btn-outline-dark ">
                                        Editar
                                    </button >
                                </a>

                                <form method="post" action="/vinculos/{{$vinculo->id}}">

                                    {{method_field('DELETE')}}


                                    {{csrf_field() }}
                                    <div>
                                        <button type="submit" class="btn btn-danger"> Deletar</button>
                                    </div>


                                </form>
                            </th>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                
                
                
            </div>

            <div id ="2" class="inv">
                <table  class="table table-responsive-sm table-striped">
                    <thead class="thead-dark">
                    <tr>

                        <th>Tipo</th>
                        <th>Subtipo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipoVinculos as $tipoVinculo)
                        <tr>

                            <th>{{$tipoVinculo->ds_tipo}}</th>
                            <th>{{$tipoVinculo->ds_subtipo}}</th>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id ="3" class="inv">

                <table  class="table table-responsive-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cbos as $cbo)
                        <tr>
                            <th>{{$cbo->cbo_codigo}}</th>
                            <th>{{$cbo->cbo_descricao}}</th>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id ="4" class="inv">

                <table  class="table table-responsive-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Vinculações</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipoVinculos->pluck('ds_vinculacao') as $vinculo  )
                        <tr>
                            <th>{{$vinculo}}</th>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


            <div style="padding-top:2%; padding-bottom: 3%">
                <a href="/profissionals/create">
                    <button type = "button" class ="btn-outline-dark ">
                        Adicionar Profisional
                    </button >
                </a>
                <a href="/cbos/create">
                    <button type = "button" class ="btn-outline-dark ">
                        Adicionar CBO
                    </button >
                </a>
                <a href="/tipoVinculos/create">
                    <button type = "button" class ="btn-outline-dark ">
                        Adicionar Tipo Vinculo
                    </button >
                </a>
            </div>
        </div>


        <div class="col-sm-1">  </div>
    </div>
@endsection