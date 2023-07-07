@extends('ganado.bovino.main')

@section('titulo', 'Registrar Ganado de Ceba')

@section('titulo-contenido', 'Registrar Ganado de Ceba')
@section('contenido')
<div class="p-2">
    <form action="{{route('engorde.store')}}" method="POST">
        @csrf
        {{-- campos ocultos --}}

        @include('ganado.bovino.base.crear')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo_alimento" 
                    label="Tipo de alimento: " 
                    value="{{old('tipo_alimentacion')}}" 
                    class="border-cyan-700"
                />
            </div>

            {{-- NOTA: el siguiente campo parece no ser necesario en ganado vacuno --}}
            {{-- <div class="w-1/4">
                <x-bladewind.input 
                    numeric="true"
                    name="cant_total_alimento" 
                    min="0"
                    label="Cantidad Total de alimento: "
                    value="{{old('cant_total_alimento')}}" 
                    class="border-cyan-700"
                />
            </div> --}}

            <div class="w-1/4">
                <x-bladewind.input
                    type="number" 
                    min="0"
                    name="duracion" 
                    label="Duracion: " 
                    value="{{old('duracion')}}" 
                    class="border-cyan-700"
                    suffix="dias"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="number" 
                    name="peso_inicial" 
                    min="0"
                    label="Peso inicial: "
                    value="{{old('peso_inicial')}}" 
                    suffix="Kg"
                    class="border-cyan-700"
                />
            </div>
            
        </div>
        <div class="flex flex-row justify-between py-3 items-center">

            <div class="w-1/4">
                <x-bladewind.input
                    type="number" 
                    name="peso_final" 
                    min="0"
                    label="Peso Esperado: "
                    value="{{old('peso_final')}}"
                    suffix="Kg" 
                    class="border-cyan-700"
                />
            </div>
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection