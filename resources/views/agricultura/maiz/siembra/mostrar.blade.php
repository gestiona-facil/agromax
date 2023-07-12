@extends('agricultura.maiz.main')

@section('titulo', 'Siembra')

@section('titulo-contenido', 'Datos de Siembra en: '.$modelo->terreno->ubicacion)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4 flex justify-between pt-6 pb-8">
        {{-- boton editar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('siembra.edit', ['siembra' => $modelo->id])}}"
            class="bg-green-700"
        >Editar</x-bladewind.button>
        {{-- boton exportar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('agricultura.siembra.exportar', ['siembra' => $modelo->id]) }}"
            class="!bg-amber-700"
        >Exportar</x-bladewind.button>
    </div>
    <div class="flex flex-row">
        <div class="px-1 w-4/5">
            <h2 class="text-2xl text-white border-b border-t py-3 indent-3 border-green-700 bg-green-700">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-1/2">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Semilla: </span><a href="{{ route('semilla.show', ['semilla' => $modelo->semilla->id]) }}" class="italic indent-6 text-2xl font-light">{{$modelo->semilla->marca}}</a>
                        </p>
                    </div>
                    <div class="w-1/2">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Terreno: </span><a href="{{ route('terreno.show', ['terreno' => $modelo->terreno->id]) }}" class="italic indent-6 text-2xl font-light">{{$modelo->terreno->ubicacion}}</a>
                        </p>
                    </div>
                </div>
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-1/2">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Fecha: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->fecha}}</span>
                        </p>
                    </div>
                    <div class="w-1/2">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Cantidad esperada: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->cant_esperada}}</span>
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-xl border-b border-t py-3 indent-3 border-gray-300 bg-green-700/10">Información Secundaria</h2>
            <div class="p-3">
                <div>
                    <x-bladewind.button
                        tag="a"
                        size="tiny"
                        {{-- href="{{ route('maiz.control-sanitario.index', ['ganado' => $modelo->agricultura->id])}}"  --}}
                    >Ver los controles sanitarios realizados</x-bladewind.button>
                </div>
            </div>
        </div>
        <div  class="border-l-2 border-amber-700 border-dashed px-1">
            <h2 class="text-lg text-white border-b border-t py-3 px-1 border-amber-700 bg-gradient-to-r from-green-700 to-amber-700">Información Adicional</h2>
        </div>
    </div>
</div>
@endsection