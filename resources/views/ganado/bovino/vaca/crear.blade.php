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

        <div class="flex flex-row justify-between items-center py-3">

            <div class="w-1/4">
                <x-bladewind.input 
                    name="alias" 
                    label="Alias" 
                    required="true"
                    value="{{old('alias')}}"
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4 flex items-center" >
                <x-bladewind.toggle 
                    name="gestando"
                    value="0"
                    vue_attr='@click="vaca_gestando = !vaca_gestando"'
                />
            </div>
        </div>
        <div class="flex flex-row justify-between py-3">
            @{{ vaca_gestando }}
            {{-- <x-bladewind.input type="date" label="Fecha de inicio de gestacion: *" model-value="{{ old('fecha_inicio_gestacion') }}"></x-bladewind.input> --}}
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection
