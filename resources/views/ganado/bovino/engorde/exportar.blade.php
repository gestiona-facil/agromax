@extends('ganado.bovino.exportar.main')

@section('contenido')
<div class="cuerpo">
    <h2 class="cuerpo__titulo"> Datos de Ganado de Ceba</h2>
    <div class="contenido">
        <!-- Sección izquierda -->
        <div class="contenido__izq">
            <div class="contenido__campo">
                <h3>Identificación: </h3>
                <span>{{ $modelo->ganado->identificacion }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Fecha de Nacimiento: </h3>
                <span>{{ $modelo->ganado->fecha_nacimiento }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Padre: </h3>
                <span>{{ $padre }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Peso Esperado: </h3>
                <span>{{ $modelo->peso_final }}</span>
            </div>
        </div>
        <!-- Sección derecha -->
        <div class="contenido__der">
            <div class="contenido__campo">
                <h3>Raza: </h3>
                <span>{{ $modelo->ganado->raza }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Madre: </h3>
                <span>{{ $madre }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Peso Inicial: </h3>
                <span>{{ $modelo->peso_inicial }}</span>
            </div>

        <div>
    </div>
</div>
@endsection