@extends('main')

@section('')

<flow-accordion>
    <flow-accordion-item title="Vacas">
      <flow-dropdown label="Acciones">
        <a href="{{ route('vacas.agregar') }}">Agregar</a>
        <a href="{{ route('vacas.modificar') }}">Modificar</a>
      </flow-dropdown>
    </flow-accordion-item>
    <flow-accordion-item title="Toros">
      <flow-dropdown label="Acciones">
        <a href="{{ route('toros.agregar') }}">Agregar</a>
        <a href="{{ route('toros.modificar') }}">Modificar</a>
      </flow-dropdown>
    </flow-accordion-item>
    <flow-accordion-item title="Levante Ordeño">
      <flow-dropdown label="Acciones">
        <a href="{{ route('levante-ordeño.agregar') }}">Agregar</a>
        <a href="{{ route('levante-ordeño.modificar') }}">Modificar</a>
      </flow-dropdown>
    </flow-accordion-item>
    <flow-accordion-item title="Finanzas">
      <flow-dropdown label="Acciones">
        <a href="{{ route('finanzas.agregar') }}">Agregar</a>
        <a href="{{ route('finanzas.modificar') }}">Modificar</a>
      </flow-dropdown>
    </flow-accordion-item>
  </flow-accordion>
  