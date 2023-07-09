@extends('ganado.bovino.main')

@section('titulo', 'Editar Lecheria')

@section('titulo-contenido', 'Editar Lecheria')
@section('contenido')
<div class="p-2">
    <form action="{{route('lecheria.update', ['lecherium' => $modelo->id ])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input  
                    name="alias"  
                    label="Alias: "  
                    value="{{ $modelo->alias }}"  
                    class="border-cyan-700" 
                />
            </div>
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
                    name="cant_meta"  
                    label="Cantidad meta: " 
                    min="0"  
                    value="{{ $modelo->cant_meta }}"  
                    class="border-cyan-700" 
                />
            </div>
        </div>

           

            <div class="flex flex-row justify-between py-3 items-center">
                <x-bladewind.textarea 
                label="Observaciones" 
                name="observaciones" 
                value="{{ $modelo->observaciones }}"  
                class="border-cyan-700"
                />
            </div>

            <div class="my-4">
                <x-bladewind.button  
                    can_submit="true" 
                    class="bg-cyan-700">Actualizar</x-bladewind.button>
            </div>
        </form>
    </div>
@endsection