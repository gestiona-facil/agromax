@extends('ganado.bovino.main')

@section('titulo', 'Lista de lecherias')

@section('titulo-contenido', 'Listado de Lecherias')

@section('contenido')
<div>
    <flow-table>
        <flow-table-head>
            <flow-table-head-cell>Nro</flow-table-head-cell>
            <flow-table-head-cell>Alias</flow-table-head-cell>
            <flow-table-head-cell>Cantidad Meta</flow-table-head-cell>
            <flow-table-head-cell>Acciones</flow-table-head-cell>
        </flow-table-head>
        <flow-table-body>
            @if($datos->count())
                @foreach($datos->items() as $dato)
                    <flow-table-row>
                        <flow-table-cell>{{ $loop->iteration }}</flow-table-cell>
                        <flow-table-cell>{{ $dato->alias}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->cant_meta}}</flow-table-cell>
                        <flow-table-cell>
                            <flow-button></flow-button>
                            {{-- Eliminar --}}
                            <form action="{{route('lecheria.destroy', [
                                'lecherium' => $dato->id
                            ])}}" method="post">
                                @csrf
                                @method('delete')
                                <flow-button type="submit" color="red" size="sm">Eliminar</flow-button>
                            </form>
                        </flow-table-cell>
                    </flow-table-row>
                @endforeach
            @else 
                <flow-table-row>
                    <flow-table-cell colspan="4">Aún no existen registros de lecherias</flow-table-cell>
                </flow-table-row>
            @endif
        </flow-table-body>
    </flow-table>
    {{ $datos->links() }}
</div>
@endsection