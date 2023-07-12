@extends('ganado.bovino.main')

@section('titulo', 'Lista de Lecherias')

@section('titulo-contenido', 'Listado de Lecherias')

@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
<div class="p-4">
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-cyan-700 text-white">
            <th class="!bg-cyan-700 !text-white">Nro</th>
            <th class="!bg-cyan-700 !text-white">Alias</th>
            <th class="!bg-cyan-700 !text-white">Meta de producción</th>
            <th class="!bg-cyan-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-cyan-700" href="{{ route('lecheria.show', ['lecherium' => $dato->id])}}">{{ $dato->alias}}</a></td>
                    <td>{{ $dato->cant_meta}} Litros al dia</td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-cyan-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('lecheria.edit', ['lecherium' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('lecheria.destroy', [
                            'lecherium' => $dato->id
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
                <td colspan="4">Aún no existen registros de Lecheria</td>
            </tr>
        @endif
    </x-bladewind.table>
    {{-- paginación --}}
    <div class="p-2">
        {{ $datos->links() }}
    </div>
    </div>
</body>
@endsection