@extends('ganado.bovino.exportar.main')

@section('contenido')
<div class="cuerpo">
    <h2 class="cuerpo__titulo"> Datos de Levante</h2>
    <div class="contenido">
        <!-- Sección izquierda -->
        <div class="contenido__izq">
            <div class="contenido__campo">
                <h3>Identificación: </h3>
                <span>{{ $modelo->ganado->identificacion }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Raza: </h3>
                <span>{{ $modelo->ganado->raza }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Sexo: </h3>
                <span>{{ $modelo->sexo ? 'Macho' : 'Hembra' }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Padre: </h3>
                <span>{{ $padre }}</span>
            </div>
        </div>
        <!-- Sección derecha -->
        <div class="contenido__der">
            <div class="contenido__campo">
                <h3>Alias: </h3>
                <span>{{ $modelo->ganado->alias ? $modelo->ganado->alias : 'No especificado' }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Fecha de Nacimiento: </h3>
                <span>{{ $modelo->ganado->fecha_nacimiento }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Madre: </h3>
                <span>{{ $madre }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Estado de destete: </h3>
                <span>{{ $modelo->destete ? 'Esta destetado' : 'No esta destetado' }}</span>
            </div>
        <div>
    </div>
</div>
@endsection