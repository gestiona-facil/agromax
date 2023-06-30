@extends('ganado.bovino.main')

@section('titulo', 'Lista de vacunas')

@section('titulo-contenido', 'Listado de Vacunas')

@section('contenido')
<div>
    <flow-table>
        <flow-table-head>
            <flow-table-head-cell>Nro</flow-table-head-cell>
            <flow-table-head-cell>Nombre</flow-table-head-cell>
            <flow-table-head-cell>Lote</flow-table-head-cell>
            <flow-table-head-cell>Fecha</flow-table-head-cell>
            <flow-table-head-cell>Acciones</flow-table-head-cell>
        </flow-table-head>
        <flow-table-body>
            @if($datos->count())
                @foreach($datos->items() as $dato)
                    <flow-table-row>
                        <flow-table-cell>{{ $loop->iteration }}</flow-table-cell>
                        <flow-table-cell>{{ $dato->nombre}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->lote}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->fecha}}</flow-table-cell>
                        <flow-table-cell>
                            <flow-button></flow-button>
                            {{-- Eliminar --}}
                            <form action="{{route('vacuna.destroy', [
                                'vacuna' => $dato->id
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
                    <flow-table-cell colspan="4">Aún no existen registros de vacunas</flow-table-cell>
                </flow-table-row>
            @endif
        </flow-table-body>
    </flow-table>
    {{ $datos->links() }}
</div>
@endsection