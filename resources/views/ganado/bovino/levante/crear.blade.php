@extends('ganado.bovino.main')

@section('titulo', 'Registrar Levante')

@section('titulo-contenido', 'Registrar Levante')
@section('contenido')
<div class="p-2">
    <form action="{{route('cria.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <input type="hidden" name="tiempo_destete" value="240">{{--En DIAS--}}
        <input type="hidden" name="tiempo_fin_levante" value="912">{{-- 0 -> pasa de levante a toro o vaca --}}
        @include('ganado.bovino.base.crear')

        <div class="flex flex-row justify-between pt-2">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{old('alias')}}"></flow-input>
            <div class="flex flex-row justify-between items-center">
                <div class="flex">
                    <input type="radio" name="destetado" value="1" id="destetado.1" @change="becerro_destetado = !becerro_destetado">
                    <label for="destetado.1">Ha sido destetado aún</label>
                </div>
                <div class="flex">
                    <input type="radio" name="lactando" value="0" id="lactando.0" checked @change="becerro_lactante = !becerro_lactante">
                    <label for="lactando.0">No esta destetado aún</label>
                </div>
            </div>
        </div>

        <div class="pt-6">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection