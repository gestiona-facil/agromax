@extends('ganado.bovino.main')

@section('titulo', 'Lista de engorde')

@section('titulo-contenido', 'Listado de engordes')

@section('contenido')
<div>
    <flow-table>
        <flow-table-head>
            <flow-table-head-cell>Nro</flow-table-head-cell>
            <flow-table-head-cell>Identificación</flow-table-head-cell>
            <flow-table-head-cell>Raza</flow-table-head-cell>
            <flow-table-head-cell>Acciones</flow-table-head-cell>
        </flow-table-head>
        <flow-table-body>
            @if($datos->count())
                @foreach($datos->items() as $dato)
                    <flow-table-row>
                        <flow-table-cell>{{ $loop->iteration }}</flow-table-cell>
                        <flow-table-cell>{{ $dato->ganado->identificacion}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->ganado->raza}}</flow-table-cell>
                        <flow-table-cell>
                            {{-- Eliminar --}}
                            <form action="{{route('engorde.destroy', [
                                'engorde' => $dato->id
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
                    <flow-table-cell colspan="4">Aún no existen registros de engordes</flow-table-cell>
                </flow-table-row>
            @endif
        </flow-table-body>
    </flow-table>
    {{ $datos->links() }}
</div>
@endsection