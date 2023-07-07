@extends('agricultura.maiz.main')

@section('titulo', 'Editar Fertilización')

@section('titulo-contenido', 'Editar Fertilización')
@section('contenido')
<div class="p-2">
    <form action="{{route('fertilizacion.update', ['fertilizacion' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.select 
                    name="siembra" 
                    label="Siembra en: " 
                    :data="$siembras"
                    class="border-green-700"
                    empty_label="No hay registros"
                    none_selected_label="ninguno"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    name="nombre" 
                    label="Fertilizante: " 
                    value="{{$modelo->nombre}}" 
                    class="border-green-700"
                    required="true"
                />
            </div>
            
            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo" 
                    label="Tipo: " 
                    value="{{$modelo->tipo}}" 
                    class="border-green-700"
                    required="true"
                />
            </div>
        </div>
            
        
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input
                    type="date"
                    label="Fecha:"
                    name="fecha"
                    value="{{$modelo->fecha}}" 
                    class="border-green-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    type="number"
                    name="cantidad" 
                    label="Cantidad: "
                    min="0" 
                    value="{{$modelo->cantidad}}" 
                    class="border-green-700"
                    required="true"
                />
            </div>
            

            <div class="w-1/4">
                <x-bladewind.input 
                    name="metodo_aplicacion" 
                    label="Metodo de aplicación: "
                    value="{{$modelo->metodo_aplicacion}}" 
                    class="border-green-700"
                    required="true"
                />
            </div>
        </div>             
        <div>
            <x-bladewind.textarea
                label="Observaciones:"
                name="observaciones"
                value="{{$modelo->observaciones}}" 
                class="border-green-700"
            />
        </div>
            
        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-green-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection