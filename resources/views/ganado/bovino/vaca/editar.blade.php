@extends('ganado.bovino.main')

@section('titulo', 'Editar Vaca')

@section('titulo-contenido', 'Editar Vaca')
@section('contenido')
<div class="p-2">
    <form action="{{route('vaca.update', ['vaca' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        <input type="hidden" name="tiempo_parto" value="270">{{--En DIAS--}}
        <input type="hidden" name="sexo" value="0">{{-- 0 -> hembra --}}
        @include('ganado.bovino.base.editar')

        <div class="flex flex-row justify-between pt-2">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{$modelo->alias}}"></flow-input>
            <div class="flex flex-row justify-between items-center">
                <div class="flex">
                    <input type="radio" name="gestando" model-value="true" id="gestando.1" @if($modelo->gestando == true) checked @endif>
                    <label for="gestando.1">Esta preñada</label>
                </div>
                <div class="flex">
                    <input type="radio" name="gestando" model-value="false" id="gestando.0" @if($modelo->gestando == false) checked @endif>
                    <label for="gestando.0">No esta preñada</label>
                </div>
            </div>
        </div>

        <div class="pt-6">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection