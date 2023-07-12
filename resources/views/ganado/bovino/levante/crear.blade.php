@extends('ganado.bovino.main')

@section('titulo', 'Registrar Levante')

@section('titulo-contenido', 'Registrar Levante')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
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

            <div class="w-1/4 flex items-center">
                <x-bladewind.toggle 
                    name="sexo"
                    value="0"{{-- 0 => hembra, 1 => macho --}}
                    vue_attr='@change="levante_sexo = !levante_sexo"'
                />
                <h3 class="px-2" v-if="levante_sexo">Hembra</h3>
                <h3 class="px-2" v-else>Macho</h3>
            </div>

            <div class="w-1/4 flex items-center">
                <x-bladewind.toggle 
                    name="destetado"
                    value="0" {{-- 0 => destetado, 1 => no destetado --}}
                    vue_attr='@change="levante_destetado = !levante_destetado"'
                />
                <h3 class="px-2" v-if="levante_destetado">Destetado</h3>
                <h3 class="px-2" v-else>No destetado</h3>
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