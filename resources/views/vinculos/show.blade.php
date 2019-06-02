

@extends('layouts.general')

@section('title','Vinculo')
@section('name','Vínculo')

@section('content')
    <form style="margin:2%">



        <label class="label" for="ch_total">Carga Horária Total</label>
        <div>
            <input readonly class="form-control" type="text" name="ch_total" placeholder=" " required value="{{$vinculo->ch_total}}">
        </div>


        <label class="label" for="cbo_id">Código CBO</label>
        <div>
            <input readonly class="form-control" type="text" name="cbo_codigo" placeholder=" " required value="{{$cbo->cbo_codigo}}">
        </div>

        <label class="label" for="cbo_descricao">Código CBO</label>
        <div>
            <input readonly class="form-control" type="text" name="cbo_descricao" placeholder=" " required value="{{$cbo->cbo_descricao}}">
        </div>

        <label class="label"> Tipo Vinculos</label>
        <div>
            <input readonly class="form-control" type="text" name="ds_tipo" placeholder=" " required value="{{$tipoVinculo->ds_tipo}}">
        </div>

        <label class="label">Profissional</label>
        <div>
            <input readonly class="form-control" type="text" placeholder=" " required value="{{$profissional->nome}}">
        </div>

        <label class="label" >Nome do profissional</label>
        <div>
            <input readonly class="form-control" type="text" placeholder=" " required value="{{$profissional->nome}}">
        </div>
        <label class="label" >Cns do profissional</label>
        <div>
            <input readonly class="form-control" type="text" placeholder=" " required value="{{$profissional->CNS}}">
        </div>

        <label class="label" >Cns do profissional</label>
        <div>
            <input readonly class="form-control" type="text" placeholder=" " required value="{{$profissional->CNS}}">
        </div>


        <div>
            <button type="submit"> Editar Vínculo</button>
        </div>




    </form>



@endsection
