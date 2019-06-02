

@extends('layouts.general')

@section('title','Profissionais')
@section('name','Adicionar novo Profissional')

@section('content')
    <form method="post" action="/profissionals">

        {{csrf_field() }}

        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="nome" placeholder="Nome do profissional">
        </div>
        <div style="margin-bottom: 2%">
            <input required class="form-control" type="text" name="CNS" placeholder="CNS do profissional">
        </div>
        <div style="margin-bottom: 2%">
            <input required class="form-control" type="date" name="data_atribuicao" placeholder="Data de Atribuição">
        </div>
        <div style="margin-bottom: 2%">
            <p>SUS</p>
            <select  class="form-control" name="sus">
                <option value="true">Sim</option>
                <option value="false">Não</option>
            </select>
        </div>
        <div style="margin-bottom: 2%">
            <button  class ="btn-outline-dark "type="submit"> Adicionar Profissional</button>
        </div>


    </form>

@endsection
