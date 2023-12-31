@extends('ganado.bovino.main')

@section('titulo', 'Editar Vaca - '.$modelo->ganado->identificacion)

@section('titulo-contenido', 'Editar Vaca: '.$modelo->ganado->identificacion)
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
<div class="p-2">
    <form action="{{route('vaca.update', ['vaca' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        <input type="hidden" name="tiempo_parto" value="270">{{--En DIAS--}}
        <input type="hidden" name="sexo" value="0">{{-- 0 -> hembra --}}
        @include('ganado.bovino.base.editar')

        <div class="flex flex-row justify-between items-center py-3">

            <div class="w-1/4">
                <x-bladewind.input 
                    name="alias" 
                    label="Alias" 
                    required="true"
                    value="{{$modelo->alias}}"
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4 flex items-center" >
                <x-bladewind.toggle 
                    name="gestando"
                    value="1"
                    vue_attr='@change="vaca_gestando = !vaca_gestando"'
                    :checked="$modelo->gestando"
                />
                <h3 class="px-2" v-if="vaca_gestando">Esta preñada</h3>
                <h3 class="px-2" v-else>No esta preñada</h3>
            </div>
            <div class="w-1/4">
                <div v-if="vaca_gestando">
                    <x-bladewind.input 
                        type="date"
                        name="fecha_inicio_gestacion" 
                        label="Fecha" 
                        required="true"
                        value="{{ $modelo->fecha_inicio_gestacion ?? '' }}"
                        class="border-cyan-700"
                    />
                </div>
            </div>
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Guardar</x-bladewind.button>
        </div>
    </form>
</div>
</body>
@endsection