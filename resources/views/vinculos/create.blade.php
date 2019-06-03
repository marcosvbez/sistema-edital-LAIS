

@extends('layouts.general')

@section('title','Vinculos')
@section('name','Adicionar novo Vínculo')

@section('content')
    <form method="post" action="/vinculos">

        {{csrf_field() }}

        <label class="label" for="ch_total">Carga Horária Total</label>
        <div>
            <input class="form-control" type="text" name="ch_total" placeholder=" " required>
        </div>


        <label class="label" for="cbo_id">Cbo</label>
        <div>
            <select  class="form-control" name="cbo_id">

                @foreach($cbos as $cbo)
                    <option value="{{$cbo->id}}">{{$cbo->cbo_descricao}}</option>
                @endforeach

            </select>
        </div>

        <label class="label" for="tipo_vinculo_id"> Tipo Vinculos</label>
        <div>
            <select  class="form-control" name="tipo_vinculo_id">

                @foreach($tipoVinculos as $tipoVinculo)
                    <option value="{{$tipoVinculo->id}}">{{$tipoVinculo->ds_tipo}}</option>
                @endforeach

            </select>
        </div>

        <label class="label" for="profissional_id">Profissional</label>
        <div>
            <select  class="form-control" name="profissional_id">

                @foreach($profissionals as $profissional)
                    <option value="{{$profissional->id}}">{{$profissional->nome}}</option>
                @endforeach

            </select>
        </div>


        <div>
            <button type="submit" class ="btn-outline-dark "> Adicionar Vínculo</button>
        </div>


    </form>

@endsection
