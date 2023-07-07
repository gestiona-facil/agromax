@extends('agricultura.maiz.main')

@section('titulo', 'Lista de Terreno')

@section('titulo-contenido', 'Listado de Terrenos')

@section('contenido')
<div class="p-4">
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-green-700 text-white">
            <th class="!bg-green-700 !text-white">Nro</th>
            <th class="!bg-green-700 !text-white">Ubicacion</th>
            <th class="!bg-green-700 !text-white">Numero de hectareas</th>
            <th class="!bg-green-700 !text-white">Estado</th>
            <th class="!bg-green-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-green-700" href="{{ route('terreno.show', ['terreno' => $dato->id])}}">{{ $dato->ubicacion }}</a></td>
                    <td>{{ $dato->hectareas}}</td>
                    <td>
                        @if($dato->siembra)
                            <span class="text-red-700 font-bold">No disponible</span>
                        @else
                            <span class="text-green-700 font-bold">Disponible</span>
                        @endif
                    </td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-green-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('terreno.edit', ['terreno' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('terreno.destroy', [
                            'terreno' => $dato->id
                        ])}}" method="post">
                            @csrf
                            @method('delete')
                            <x-bladewind.button 
                                class="bg-red-700"
                                size="tiny" can_submit="true">Eliminar</x-bladewind.button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else 
            <tr>
                <td colspan="4" class="text-center">Aún no existen registros de Terrenos</td>
            </tr>
        @endif
    </x-bladewind.table>
    {{-- paginación --}}
    <div class="p-2">
        {{ $datos->links() }}
    </div>
</div>
@endsection