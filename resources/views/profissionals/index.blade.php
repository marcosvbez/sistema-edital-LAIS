@extends('layouts.general')

@section('title','Profissionais')
@section('name','Lista de Profissionais')



@section('content')
    <div align="right">
        <a href="/profissionals/create">
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
                    <th>Nome</th>
                    <th>CNS</th>
                    <th>Data de Atribuição</th>
                    <th>SUS</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($profissionals as $profissional)
                        <tr>
                            <th>{{$profissional->nome}}</th>
                            <th>{{$profissional->CNS}}</th>
                            <th>{{$profissional->data_atribuicao}}</th>
                            <th>{{$profissional->sus}}</th>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
        </div>
        <div class="col-sm-3">  </div>
    </div>
    @endsection