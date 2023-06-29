@extends('ganado.bovino.main')

@section('titulo', 'Lista de vaca')

@section('titulo-contenido', 'Listado de Vacas')

@section('contenido')
<div>
    <flow-table>
        <flow-table-head>
            <flow-table-head-cell>Nro</flow-table-head-cell>
            <flow-table-head-cell>Identificación</flow-table-head-cell>
            <flow-table-head-cell>Alias</flow-table-head-cell>
            <flow-table-head-cell>Acciones</flow-table-head-cell>
        </flow-table-head>
        <flow-table-body>
            @if($datos->count())
                @foreach($datos->items() as $dato)
                    <flow-table-row>
                        <flow-table-cell>{{ $loop->iteration }}</flow-table-cell>
                        <flow-table-cell>{{ $dato->ganado->identificacion}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->alias}}</flow-table-cell>
                        <flow-table-cell>
                            <flow-button></flow-button>
                            {{-- Eliminar --}}
                            <form action="{{route('vaca.destroy', [
                                'vaca' => $dato->id
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
                    <flow-table-cell colspan="4">Aún no existen registros de vacas</flow-table-cell>
                </flow-table-row>
            @endif
        </flow-table-body>
    </flow-table>
    {{ $datos->links() }}
</div>
@endsection