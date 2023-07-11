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
                    value="1"
                    vue_attr='@change="vaca_gestando = !vaca_gestando"'
                />
                <h3 class="px-2" v-if="vaca_gestando">Esta preñada</h3>
                <h3 class="px-2" v-else>No esta preñada</h3>
            </div>

            <div class="w-1/4">
                <div v-if="vaca_gestando">
                    <x-bladewind.input 
                        type="date"
                        name="fecha_inicio_gestacion" 
                        label="Fecha de fecundación" 
                        required="true"
                        value="{{ old('fecha_inicio_gestacion') }}"
                        class="border-cyan-700"
                    />
                </div>
            </div>
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
</body>
@endsection
