@extends('ganado.bovino.main')

@section('titulo', 'Control sobre leche')

@section('titulo-contenido', 'Control de Leche para vaca: '.($modelo->alias ? $modelo->alias : $modelo->ganado->identificacion))

@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
    <div class="p-4">
    <div class="p-4">
        <x-bladewind.button
            tag="a"
            href="{{ route('bovino.control-lecheria.create', ['madre' => $modelo->id]) }}"
            size="tiny"
        >Agregar Control</x-bladewind.button>
    </div>
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-cyan-700 text-white">
            <th class="!bg-cyan-700 !text-white">Nro</th>
            <th class="!bg-cyan-700 !text-white">Identificación</th>
            <th class="!bg-cyan-700 !text-white">Producción</th>
            <th class="!bg-cyan-700 !text-white">Fecha</th>
            <th class="!bg-cyan-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-cyan-700" href="{{ route('vaca.show', ['vaca' => $modelo->id])}}">{{ $modelo->alias ? $modelo->alias : $modelo->identificacion }}</a></td>
                    <td>{{ $dato->cant_recolectada }} Litros</td>
                    <td>{{ $dato->fecha }}</td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-cyan-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('bovino.control-lecheria.edit', ['controlLecheria' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('bovino.control-lecheria.destroy', [
                            'controlLecheria' => $dato->id
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
                <td colspan="4" class="text-center">Aún no se han registrados controles sobre leche</td>
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