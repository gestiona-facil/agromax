@extends('agricultura.maiz.main')

@section('titulo', 'Lista de Siembras')

@section('titulo-contenido', 'Listado de Siembras')

@section('contenido')
<div class="p-4">
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-green-700 text-white">
            <th class="!bg-green-700 !text-white">Nro</th>
            <th class="!bg-green-700 !text-white">Terreno</th>
            <th class="!bg-green-700 !text-white">Fecha</th>
            <th class="!bg-green-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-green-700" href="{{ route('siembra.show', ['siembra' => $dato->id])}}">{{ $dato->terreno->ubicacion}}</a></td>
                    <td>{{ $dato->fecha}}</td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-green-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('siembra.edit', ['siembra' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('siembra.destroy', [
                            'siembra' => $dato->id
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
                <td colspan="4" class="text-center">Aún no existen registros de Siembras</td>
            </tr>
        @endif
    </x-bladewind.table>
    {{-- paginación --}}
    <div class="p-2">
        {{ $datos->links() }}
    </div>
</div>
@endsection