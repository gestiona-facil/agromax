@extends('ganado.bovino.main')

@section('titulo', 'Lista Ganado de Ceba')

@section('titulo-contenido', 'Listado de Ganado de Ceba')

@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
<div class="p-4">
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-cyan-700 text-white">
            <th class="!bg-cyan-700 !text-white">Nro</th>
            <th class="!bg-cyan-700 !text-white">Identificación</th>
            <th class="!bg-cyan-700 !text-white">Peso Esperado</th>
            <th class="!bg-cyan-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-cyan-700" href="{{ route('engorde.show', ['engorde' => $dato->id])}}">{{ $dato->ganado->identificacion}}</a></td>
                    <td>{{ $dato->peso_final }} kg</td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-cyan-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('engorde.edit', ['engorde' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('engorde.destroy', [
                            'engorde' => $dato->id
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
                <td colspan="4" class="text-center">Aún no existen registros de Engorde</td>
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