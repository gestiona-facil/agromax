@extends('main')

@section('app')
    <form>
       <flow-input type="text" label="Nombre de la Empresa"></flow-input>

       <!-- credenciales -->
       <flow-input type="text" label="Email: *" name="email"></flow-input>
       <flow-input type="text" label="Clave: *"></flow-input>
       <flow-input type="text" label="Confirme Clave: *"></flow-input>

       <!-- seguridad -->
       <flow-input type="text" label="Pregunta de Seguridad: *" :class="text-blue-400"></flow-input>
       <flow-input type="password" label="Respuesta: *"></flow-input>

       <flow-button>Registrar</flow-button>
    </form>
@endsection