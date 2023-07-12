@extends('ganado.bovino.main')

@section('titulo', 'Lecheria')

@section('titulo-contenido', 'Datos de Lecheria: '.$modelo->alias)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4 flex justify-between pt-6 pb-8">
        {{-- boton editar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('lecheria.edit', ['lecherium' => $modelo->id])}}"
            class="bg-cyan-700"
        >Editar</x-bladewind.button>
        {{-- boton exportar --}}
        <x-bladewind.button
            tag="a" 
            size="tiny" href="{{ route('bovino.lecheria.exportar', ['lecherium' => $modelo->id]) }}"
            class="!bg-amber-700"
        >Exportar</x-bladewind.button>
    </div>
    <div class="flex flex-row">
        <div class="px-2 w-4/5">
            <h2 class="text-2xl text-white border-b border-t py-3 indent-3 border-cyan-700 bg-cyan-700">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div class="w-full">
                        <p class="flex flex-col text-xl">
                            <span class="px-2">Alias: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->alias}}</span>
                        </p>
                    </div>
                    <div class="w-full">
                        <div>
                            <p class="flex flex-col text-xl">
                                <span class="px-2">Meta de producción: </span><span class="italic indent-6 text-2xl font-light">{{$modelo->cant_meta}} Litros</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center py-3 justify-between">
                    <p class="flex flex-col text-xl">
                        <span class="px-2">Observaciones: </span>
                        <span class="italic indent-3 font-light">{{$modelo->observaciones}}</span>
                    </p>
                </div>
            </div>
            <h2 class="text-xl border-b border-t py-3 indent-3 border-gray-300 bg-cyan-700/10">Información Secundaria</h2>
            <div class="p-3">
                <x-bladewind.table>
                    <x-slot name="header">
                        <th>Nro</th>
                        <th>Identificación</th>
                        <th>Producción</th>
                        <th>Fecha</th>
                        <th>Acción</th>
                    </x-slot>
                    @foreach($vacas as $vaca)
                        @php
                            $control = $vaca->controles_lecheria()->orderByDesc('created_at')->first();
                        @endphp

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $vaca->ganado->identificacion }}</td>
                            @if($control)
                            <td>{{ $control->cant_recolectada }} Litros</td>
                            <td>{{ $control->fecha }}</td>
                            @endif
                            <td>
                                @if($control)
                                <x-bladewind.button
                                    tag="a"
                                    href="{{ route('bovino.control-lecheria.edit', ['controlLecheria' => $control->id])}}"
                                    size="tiny"
                                    class="bg-cyan-700"
                                >Editar</x-bladewind.button>
                                @endif
                                <x-bladewind.button
                                    tag="a"
                                    href="{{ route('bovino.control-lecheria.create', ['madre' => $vaca->id]) }}"
                                    size="tiny"
                                    class="bg-cyan-700"
                                >Nuevo registro</x-bladewind.button>
                            </td>
                        </tr>
                    @endforeach
                </x-bladewind.table>
            </div>
        </div>
        <div  class="border-l-2 border-amber-700 border-dashed px-1">
            <h2 class="text-lg text-white border-b border-t py-3 px-1 border-amber-700 bg-gradient-to-r from-cyan-700 to-amber-700">Información Adicional</h2>
        </div>
    </div>
</div>
@endsection