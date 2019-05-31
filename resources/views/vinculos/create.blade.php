

@extends('layouts.general')

@section('title','Vinculos')
@section('name','Adicionar novo Vínculo')

@section('content')
    <form method="post" action="/vinculos">

        {{csrf_field() }}

        <div>
            <input type="text" name="ch_total" placeholder="Carga horária total">
        </div>
        <div>
            <input type="text" name="cbo_id" placeholder="CBO">
        </div>
        <div>
            <input type="text" name="tipo_vinculo_id" placeholder="Tipo de vinculo">
        </div>
        <div>
            <input type="text" name="profissional_id" placeholder="Profissional">
        </div>


        <div>
            <button type="submit"> Adicionar Vínculo</button>
        </div>


    </form>

@endsection
