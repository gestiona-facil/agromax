@extends('ganado.bovino.main')

@section('titulo', 'Controles Sanitarios')

@section('titulo-contenido', 'Controles Sanitario para ganado: '.$ganado->identificacion)

@section('contenido')
<div class="p-4">
    <div class="p-4">
        <x-bladewind.button
            tag="a"
            href="{{ route('bovino.control-sanitario.create', ['ganado' => $ganado->id]) }}"
            size="tiny"
        >Agregar Control</x-bladewind.button>
    </div>
    <x-bladewind.table
        divider="thin"
    >
        <x-slot name="header" class="!bg-cyan-700 text-white">
            <th class="!bg-cyan-700 !text-white">Nro</th>
            <th class="!bg-cyan-700 !text-white">Fecha</th>
            <th class="!bg-cyan-700 !text-white">Estado de Salud</th>
            <th class="!bg-cyan-700 !text-white">Acciones</th>
        </x-slot>
        @if($datos->count())
            @foreach($datos->items() as $dato)
                <tr>
                    <td class="font-bold">{{ $loop->iteration }}</td>
                    <td><a class="text-amber-700 underline hover:text-cyan-700" href="{{ route('bovino.control-sanitario.show', ['controlSanitarioAnimal' => $ganado->id])}}">{{ $dato->fecha }}</a></td>
                    <td>{{ $ganado->estado_salud ? 'Enfermo' : 'Sano'}}</td>
                    <td class="flex justify-start">
                        <x-bladewind.button
                            class="bg-cyan-700" 
                            tag="a" 
                            size="tiny"
                            href="{{ route('bovino.control-sanitario.edit', ['controlSanitarioAnimal' => $dato->id])}}">Editar</x-bladewind.button>
                        {{-- Eliminar --}}
                        <form action="{{route('bovino.control-sanitario.destroy', [
                            'controlSanitarioAnimal' => $dato->id
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
                <td colspan="4" class="text-center">Aún no se han registrados controles sanitarios</td>
            </tr>
        @endif
    </x-bladewind.table>
    {{-- paginación --}}
    <div class="p-2">
        {{ $datos->links() }}
    </div>
</div>
@endsection