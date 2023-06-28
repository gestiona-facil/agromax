@extends('ganado.bovino.main')

@section('titulo', 'Registrar Vaca')

@section('titulo-contenido', 'Registrar Vaca')
@section('contenido')
<div class="p-2">
    <form action="{{route('vaca.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <input type="hidden" name="tiempo_parto" value="270">{{--En DIAS--}}
        <input type="hidden" name="sexo" value="0">{{-- 0 -> hembra --}}
        @include('ganado.bovino.base.crear')

        <div class="flex flex-row justify-between pt-2">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{old('alias')}}"></flow-input>
            <div class="flex flex-row justify-between items-center">
                <div class="flex">
                    <input type="radio" name="gestando" value="1" id="gestando.1" @change="vaca_gestando = !vaca_gestando">
                    <label for="gestando.1">Esta preñada</label>
                </div>
                <div class="flex">
                    <input type="radio" name="gestando" value="0" id="gestando.0" checked @change="vaca_gestando = !vaca_gestando">
                    <label for="gestando.0">No esta preñada</label>
                </div>
            </div>
        </div>
        <div v-if="vaca_gestando" class="flex flex-row justify-between pt-2">
            <flow-input type="date" label="Fecha de inicio de gestacion: *"></flow-input>
        </div>

        <div class="pt-6">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection