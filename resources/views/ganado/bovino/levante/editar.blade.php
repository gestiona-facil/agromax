@extends('ganado.bovino.main')

@section('titulo', 'Editar Levante')

@section('titulo-contenido', 'Editar Levante')
@section('contenido')
<div class="p-2">
    <form action="{{route('cria.update', ['crium' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        <input type="hidden" name="tiempo_destete" value="240">{{--En DIAS--}}
        <input type="hidden" name="tiempo_fin_levante" value="912">{{-- 0 -> pasa de levante a toro o vaca --}}
        @include('ganado.bovino.base.editar', ['modelo' => $modelo->ganado])

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{ $modelo->alias }}"></flow-input>
            <div class="flex flex-row justify-between items-center">
                <div class="flex">
                    <input type="radio" name="sexo" value="1" id="sexo.1" @if($modelo->sexo) checked @endif>
                    <label for="destetado.1">Macho</label>
                </div>
                <div class="flex">
                    <input type="radio" name="sexo" value="0" id="sexo.0" @if(!$modelo->sexo) checked @endif>
                    <label for="lactando.0">Hembra</label>
                </div>
            </div>
            <div class="flex flex-row justify-between items-center">
                <div class="flex">
                    <input type="radio" name="destetado" value="1" id="destetado.1" @if($modelo->destetado) checked @endif>
                    <label for="destetado.1">Ha sido destetado</label>
                </div>
                <div class="flex">
                    <input type="radio" name="destetado" value="0" id="lactando.0" @if(!$modelo->destetado) checked @endif>
                    <label for="lactando.0">No esta destetado aún</label>
                </div>
            </div>
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection