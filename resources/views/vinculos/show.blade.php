

@extends('layouts.general')

@section('title','Vinculo')
@section('name',Vínculo')

@section('content')
    <form style="margin:2%">

        {{method_field('PATCH')}}


        {{csrf_field() }}


        <label class="label" for="ch_total">Carga Horária Total</label>
        <div>
            <input type="text" name="ch_total" placeholder=" " required value="{{$vinculo->ch_total}}">
        </div>


        <label class="label" for="cbo_id">Cbo</label>
        <div>
            <select  name="cbo_id">

                @foreach($cbos as $cbo)
                    <option value="{{$cbo->id}}" @if($cbo->id==$vinculo->cbo_id) selected @endif>{{$cbo->cbo_descricao}}</option>
                @endforeach

            </select>
        </div>

        <label class="label" for="tipo_vinculo_id"> Tipo Vinculos</label>
        <div>
            <select  name="tipo_vinculo_id">

                @foreach($tipoVinculos as $tipoVinculo)
                    <option value="{{$tipoVinculo->id}}" @if($tipoVinculo->id==$vinculo->tipo_vinculo_id) selected @endif>{{$tipoVinculo->ds_tipo}}</option>
                @endforeach

            </select>
        </div>

        <label class="label" for="profissional_id">Profissional</label>
        <div>
            <select  name="profissional_id">

                @foreach($profissionals as $profissional)
                    <option value="{{$profissional->id}}" @if($profissional->id==$vinculo->profissional_id) selected @endif>{{$profissional->nome}}</option>
                @endforeach

            </select>
        </div>


        <div>
            <button type="submit"> Editar Vínculo</button>
        </div>




    </form>



@endsection
