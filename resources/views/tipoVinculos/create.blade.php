

@extends('layouts.general')

@section('title','CBO')
@section('name','Adicionar Tipo Vinculo')

@section('content')
    <form method="post" action="/tipoVinculos">

        {{csrf_field() }}

        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="ds_tipo" placeholder="Tipo">
        </div>
        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="ds_vinculacao" placeholder="Vinculação">
        </div>

        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="ds_subtipo" placeholder="Subtipo">
        </div>

        <div style="margin-bottom: 2%">
            <button class ="btn-outline-dark " type="submit"> Adicionar Tipo Vinculação</button>
        </div>


    </form>

@endsection
