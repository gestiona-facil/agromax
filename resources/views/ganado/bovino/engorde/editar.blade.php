@extends('ganado.bovino.main')

@section('titulo', 'Editar Engorde')

@section('titulo-contenido', 'Editar Engorde')
@section('contenido')
<div class="p-2">
    <form action="{{route('engorde.update', ['engorde' => $modelo->id])}}" method="POST">
        @csrf
        @method('PUT')

        @include('ganado.bovino.base.editar')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input  
                    name="tipo_alimento"  
                    label="Tipo de alimento: "  
                    value="{{ $modelo->tipo_alimento }}"  
                    class="border-cyan-700" 
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input  
                    numeric="true"
                    name="duracion"  
                    label="Duracion: "  
                    value="{{ $modelo->duracion }}"  
                    class="border-cyan-700" 
                    required="true"
                    suffix="dias"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    type="number"
                    name="peso_inicial"  
                    label="Peso inicial: " 
                    min="0"  
                    value="{{ $modelo->peso_inicial }}"  
                    class="border-cyan-700" 
                    suffix="Kg"
                />
            </div>
        </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input
                    numeric="true"  
                    name="peso_final"  
                    min="0" 
                    label="Peso Esperado: " 
                    min="0"  
                    value="{{ $modelo->peso_final }}"  
                    class="border-cyan-700" 
                    suffix="Kg"
                />
            </div>
        </div>

        <div class="my-4">
            <x-bladewind.button  
                can_submit="true" 
                class="bg-cyan-700">Actualizar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection