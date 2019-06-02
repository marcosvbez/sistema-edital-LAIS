

@extends('layouts.general')

@section('title','CBO')
@section('name','Adicionar CBO')

@section('content')
    <form method="post" action="/cbos">

        {{csrf_field() }}

        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="cbo_codigo" placeholder="Código do CBO">
        </div>
        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="cbo_descricao" placeholder="Descrição do CBO">
        </div>

        <div style="margin-bottom: 2%">
            <button class ="btn-outline-dark " type="submit"> Adicionar CBO</button>
        </div>


    </form>

@endsection
