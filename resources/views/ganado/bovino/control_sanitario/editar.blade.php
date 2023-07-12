@extends('ganado.bovino.main')

@section('titulo', 'Editar Control Sanitario')

@section('titulo-contenido', 'Editar Control Sanitario')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
    <div class="p-2">
    <form action="{{route('bovino.control-sanitario.update', ['controlSanitarioAnimal' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        <input type="hidden" name="redirect" value="{{ back()->getTargetUrl() }}">
        <input type="hidden" name="ganado" value="{{ $modelo->ganado->id }}">

        <div class="flex flex-row justify-between items-center py-3">

            <div class="w-1/4">
                <x-bladewind.input
                    label="Ganado:"
                    name="ignore"
                    value="{{ $modelo->ganado->identificacion }}"
                    disabled
                    class="bg-gray-100 cursor-not-allowed"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="date"
                    label="Fecha"
                    name="fecha"
                    required="true" 
                    value="{{ $modelo->fecha }}"
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="date"
                    label="Proximo control: "
                    name="fecha_control_proximo"
                    value="{{ $modelo->fecha_control_proximo ? $modelo->fecha_control_proximo : ''}}"
                    class="border-cyan-700"
                />
            </div>
        </div>
        <div class="flex flex-row justify-between items-center py-3">
            <div class="w-1/4 flex items-center" >
                <x-bladewind.toggle 
                    name="estado_salud"
                    value="1"{{-- 0 => sano ; 1 => enfermo --}}
                    vue_attr='@change="vaca_gestando = !vaca_gestando"' {{-- NOTA: usando <vaca_gestando> para reciclar --}}
                />
                <h3 class="px-2" v-if="vaca_gestando">Ganado enfermo</h3>
                <h3 class="px-2" v-else>Ganado sano</h3>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center py-3">
            <x-bladewind.textarea
                label="Observaciones: " 
                value="{{ old('observaciones') }}"
                class="border-cyan-700"
            />
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Agregar</x-bladewind.button>
        </div>
    </form>
    </div>
</body>
@endsection
