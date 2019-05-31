

@extends('layouts.general')

@section('title','Profissionais')
@section('name','Adicionar novo Profissional')

@section('content')
    <form method="post" action="/profissionals">

        {{csrf_field() }}

        <div>
            <input type="text" name="nome" placeholder="nome do profissional">
        </div>
        <div>
            <input type="text" name="CNS" placeholder="CNS do profissional">
        </div>
        <div>
            <input type="date" name="data_atribuicao" placeholder="Data de Atribuição">
        </div>
        <div>
            <p>Sus</p>
            <select  name="sus">
                <option value="true">Sim</option>
                <option value="false">Não</option>
            </select>
        </div>
        <div>
            <button type="submit"> Adicionar Profissional</button>
        </div>


    </form>

@endsection
