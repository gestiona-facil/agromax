@extends('agricultura.maiz.main')

@section('titulo', 'Terreno')

@section('titulo-contenido', 'Datos de Terreno: '.$modelo->ubicacion)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4 flex justify-between pt-6 pb-8">
        {{-- boton editar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('terreno.edit', ['terreno' => $modelo->id])}}"
            class="bg-green-700"
        >Editar</x-bladewind.button>
        {{-- boton exportar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('agricultura.terreno.exportar', ['terreno' => $modelo->id]) }}"
            class="!bg-amber-700"
        >Exportar</x-bladewind.button>
    </div>
    <div class="flex flex-row">
        <div class="px-1 w-4/5">
            <h2 class="text-2xl text-white border-b border-t py-3 indent-3 border-green-700 bg-green-700">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Hectareas: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->hectareas}}</span>
                        </p>
                    </div>
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Ubicacion: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->ubicacion}}</span>
                        </p>
                    </div>
                </div>
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Tipo de suelo: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->tipo_suelo}}</span>
                        </p>
                    </div>
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Nivel de humedad: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->nivel_humedad}}</span>
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
                        class="bg-green-700"
                    >Ver los controles sanitarios realizados</x-bladewind.button>
                </div>
            </div>
        </div>
        <div  class="border-l-2 border-amber-700 border-dashed px-1">
            <h2 class="text-lg text-white border-b border-t py-3 px-1 border-amber-700 bg-gradient-to-r from-green-700 to-amber-700">Información Adicional</h2>
            <p class="p-3">
                <x-bladewind.tag
                    :label="$modelo->siembra ? 'ESTA SEMBRADO' : 'DISPONIBLE' "
                    size="tiny"
                    class="bg-green-500 text-white"
                />
            </p>
        </div>
    </div>
</div>
@endsection