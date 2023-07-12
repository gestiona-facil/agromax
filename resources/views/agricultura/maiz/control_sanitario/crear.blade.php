@extends('agricultura.maiz.main')

@section('titulo', 'Agregar Control Sanitario')

@section('titulo-contenido', 'Agregar Control Sanitario')
@section('contenido')
<div class="p-2">
    <form action="{{route('agricultura.control-sanitario.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <input type="hidden" name="redirect" value="{{ back()->getTargetUrl() }}">
        <input type="hidden" name="ganado" value="{{ $ganado->id }}">

        <div class="flex flex-row justify-between items-center py-3">

            <div class="w-1/4">
                <x-bladewind.input
                    label="Ganado:"
                    name="ignore"
                    value="{{ $ganado->identificacion }}"
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
                    value="{{ date('Y-m-d') }}"
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="date"
                    label="Proximo control: "
                    name="fecha_control_proximo"
                    value="{{ date('Y-m-d') }}"
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
                name="observaciones"
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
@endsection
