@extends('ganado.bovino.main')

@section('titulo', 'Editar Engorde')

@section('titulo-contenido', 'Editar Engorde')
@section('contenido')
<div class="p-2">
    <form action="{{route('engorde.update', ['engorde' => $modelo->id])}}" method="POST">
        @csrf
        @method('PUT')

        @include('ganado.bovino.base.crear')

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
                    name="cant_total_alimento"  
                    min="0" 
                    label="Cantidad Total de alimento: " 
                    min="0"  
                    value="{{ $modelo->cant_total_alimento }}"  
                    class="border-cyan-700" 
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input  
                    type="numeric" 
                    name="duracion (En dias)"  
                    label="Duracion: "  
                    value="{{ $modelo->duracion }}"  
                    class="border-cyan-700" 
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input  
                    name="cant_meta"  
                    min="0" 
                    label="Cantidad meta: " 
                    min="0"  
                    value="{{ $modelo->cant_meta }}"  
                    class="border-cyan-700" 
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input  
                    name="peso_inicial"  
                    min="0" 
                    label="Peso inicial: " 
                    min="0"  
                    value="{{ $modelo->peso_inicial }}"  
                    class="border-cyan-700" 
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input  
                    name="peso_final"  
                    min="0" 
                    label="Peso final: " 
                    min="0"  
                    value="{{ $modelo->peso_final }}"  
                    class="border-cyan-700" 
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