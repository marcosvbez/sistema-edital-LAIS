

@extends('layouts.general')

@section('title','Vinculos')
@section('name','Editar um Vínculo')

@section('content')
    <form method="post" action="/vinculos/{{$vinculo->id}}" style="margin-bottom:2%">

        {{method_field('PATCH')}}


        {{csrf_field() }}

        <label class="label" for="ch_total">Carga Horária Total</label>
        <div>
            <input type="text" name="ch_total" placeholder="Carga horária total" value="{{$vinculo->ch_total}}">
        </div>

        <label class="label" for="cbo_id">Cbo</label>
        <div>
            <input type="text" name="cbo_id" placeholder="CBO" value="{{$vinculo->cbo_id}}">
        </div>

        <label class="label" for="tipo_vinculo_id"> Tipo Vinculos</label>
        <div>
            <input type="text" name="tipo_vinculo_id" placeholder="Tipo de vinculo" value="{{$vinculo->tipo_vinculo_id}}">
        </div>

        <label class="label" for="profissional_id">Profissional</label>
        <div>
            <input type="text" name="profissional_id" placeholder="Profissional" value="{{$vinculo->profissional_id}}">
        </div>


        <div>
            <button type="submit"> Adicionar Vínculo</button>
        </div>


    </form>

    <form method="post" action="/vinculos/{{$vinculo->id}}">

    {{method_field('DELETE')}}


    {{csrf_field() }}
        <div>
            <button type="submit"> Deletar Vínculo</button>
        </div>


    </form>

@endsection
