@extends('main')

@section('titulo', 'Semilla')

@section('titulo-contenido', 'Datos de Semilla: '.$modelo->ganado->identificacion)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4 flex justify-between pt-6 pb-8">
        {{-- boton editar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('semilla.edit', ['semilla' => $modelo->id])}}"
            class="bg-green-700"
        >Editar</x-bladewind.button>
        {{-- boton exportar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="#exportar"
            class="!bg-amber-700"
        >Exportar</x-bladewind.button>
    </div>
    <div class="flex flex-row">
        <div class="px-1 w-4/5">
            <h2 class="text-2xl text-white border-b border-t py-3 indent-3 border-green-700 bg-green-700">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Marca: </span><span class="italic text-2xl font-light">{{$modelo->marca}}</span>
                        </p>
                    </div>
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Cantidad: </span><span class="italic text-2xl font-light">{{$modelo->cantidad}}</span>
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
                        href="{{ route('maiz.control-sanitario.index', ['ganado' => $modelo->agricultura->id])}}" 
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