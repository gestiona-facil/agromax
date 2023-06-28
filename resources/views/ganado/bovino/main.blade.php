@extends('main')

@section('app')
    {{-- Header --}}
    <div>
        {{-- Sidebar --}}
        <div>
            <h1> @yield('titulo-contenido') </h1>
            @yield('contenido')
        </div>
    </div>
    {{-- Footer --}}
@endsection