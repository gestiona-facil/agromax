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
        @include('ganado.bovino.base.editar', ['modelo' => $modelo->ganado])

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{ $modelo->alias }}"></flow-input>
            <div class="flex flex-row justify-between items-center">
                <div class="flex">
                    <input type="radio" name="gestando" model-value="true" id="gestando.1" @if($modelo->gestando == true) checked @endif @change="vaca_gestando = !vaca_gestando">
                    <label for="gestando.1">Esta preñada</label>
                </div>
                <div class="flex">
                    <input type="radio" name="gestando" model-value="false" id="gestando.0" @if($modelo->gestando == false) checked @endif @change="vaca_gestando = !vaca_gestando">
                    <label for="gestando.0">No esta preñada</label>
                </div>
            </div>
        </div>
        <div v-if="vaca_gestando" class="flex flex-row justify-between py-3">
            <flow-input type="date" label="Fecha de inicio de gestacion: *" model-value="{{ old('fecha_inicio_gestacion') }}"></flow-input>
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection