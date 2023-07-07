@extends('ganado.bovino.main')

@section('titulo', 'Vaca')

@section('titulo-contenido', 'Datos de Vaca: '.$modelo->ganado->identificacion)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4 flex justify-between pt-6 pb-8">
        {{-- boton editar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('vaca.edit', ['vaca' => $modelo->id])}}"
            class="bg-cyan-700"
        >Editar</x-bladewind.button>
        {{-- boton exportar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('bovino.vaca.exportar', ['vaca' => $modelo->id]) }}"
            class="!bg-amber-700"
        >Exportar</x-bladewind.button>
    </div>
    <div class="flex flex-row">
        <div class="px-1 w-4/5">
            <h2 class="text-2xl text-white border-b border-t py-3 indent-3 border-cyan-700 bg-cyan-700">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Identificación: </span><span class="indent-6 italic text-2xl font-light">{{$modelo->ganado->identificacion}}</span>
                        </p>
                    </div>
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Alias: </span><span class="indent-6 italic text-2xl font-light">{{$modelo->alias ? $modelo->alias : 'no especificado'}}</span>
                        </p>
                    </div>
                </div>
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Fecha de nacimiento:</span><span class="indent-6 italic text-2xl font-light">{{$modelo->ganado->fecha_nacimiento}}</span>
                        </p>
                    </div>
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Raza:</span><span class="indent-6 italic text-2xl font-light">{{$modelo->ganado->raza }}</span>
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-xl border-b border-t py-3 indent-3 border-gray-300 bg-cyan-700/10">Información Secundaria</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Lecheria:</span><span class="indent-6 italic text-2xl font-light">{{$modelo->lecheria ? $modelo->lecheria->alias : 'No especificado'}}</span>
                        </p>
                    </div>
                </div>
                <div class="pt-6">
                    <x-bladewind.button
                        tag="a"
                        size="tiny"
                        href="{{ route('bovino.control-sanitario.index', ['ganado' => $modelo->ganado->id])}}" 
                    >Ver los controles sanitarios realizados</x-bladewind.button>
                </div>
            </div>
        </div>
        <div  class="border-l-2 border-amber-700 border-dashed px-1">
            <h2 class="text-lg text-white border-b border-t py-3 px-1 border-amber-700 bg-gradient-to-r from-cyan-700 to-amber-700">Información Adicional</h2>
            <div class="p-3">
                <div>
                    <x-bladewind.tag
                        :label="$modelo->gestando ? 'Vaca preñada': 'Vaca no esta preñada'" />
                </div>
                @if($modelo->lecheria)
                    <div>
                        <x-bladewind.button
                            tag="a"
                            href="{{ route('bovino.control-lecheria.index', ['madre' => $modelo->id]) }}"
                            size="tiny"
                            class="bg-cyan-700"
                        >Ver control en leche</x-bladewind.button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection