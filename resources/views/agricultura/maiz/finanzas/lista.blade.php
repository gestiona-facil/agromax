@extends('agricultura.maiz.main')

@section('titulo', 'Lista de Finanzas')

@section('titulo-contenido', 'Listado de Finanzas')

@section('contenido')
<body class="bg-cover bg-gradient-to-r from-cyan-700 to-green-600 full-screen">
<div class="p-4">
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-green-700 text-white">
            <th class="!bg-green-700 !text-white">Nro</th>
            <th class="!bg-green-700 !text-white">Concepto</th>
            <th class="!bg-green-700 !text-white">Naturaleza</th>
            <th class="!bg-green-700 !text-white">Monto</th>
            <th class="!bg-green-700 !text-white">Fecha</th>
            <th class="!bg-green-700 !text-white">Observaciones</th>
            <th class="!bg-green-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-green-700" href="{{ route('finanza.show', ['finanza' => $dato->id])}}">{{ $dato->siembra->terreno->ubicacion}}</a></td>
                    <td>{{ $dato->cantidad}}</td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-green-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('finanza.edit', ['finanza' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('finanza.destroy', [
                            'finanza' => $dato->id
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
                <td colspan="4">Aún no existen registros de Finanzas</td>
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