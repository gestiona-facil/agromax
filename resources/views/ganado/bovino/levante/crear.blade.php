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

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="alias" 
                    label="Alias: " 
                    value="{{old('alias')}}" 
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.toggle 
                    name="sexo"
                    {{-- 0 => hembra, 1 => macho --}}
                    value="0"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.toggle 
                    name="destetado"
                    {{-- 0 => destetado, 1 => lactando --}}
                    value="0" 
                />
            </div>
 
        </div>

        <div {!!'@click="vaca_gestando = !vaca_gestando"'!!}>
            <h1 v-if="vaca_gestando">Si gestando</h1>
            <h1 v-if="!vaca_gestando">No gestando</h1>
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection