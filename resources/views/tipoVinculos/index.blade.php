@extends('layouts.general')

@section('title','Tipo Vínculos')
@section('name','Lista de Tipos de Vínculos')



@section('content')
    <div align="right">
        <a href="/tipoVinculos/create">
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
                        <th>Vinculação</th>
                        <th>Tipo</th>
                        <th>Subtipo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipoVinculos as $tipoVinculo)
                        <tr>
                            <th>{{$tipoVinculo->ds_vinculacao}}</th>
                            <th>{{$tipoVinculo->ds_tipo}}</th>
                            <th>{{$tipoVinculo->ds_subtipo}}</th>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-3">  </div>
    </div>
@endsection