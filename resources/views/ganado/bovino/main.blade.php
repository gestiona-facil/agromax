@extends('main')

@section('app')
    {{-- Header --}}
    @include('ganado.bovino.layout.header')
    <div>
        <div>
            <h1 class="py-2 text-3xl text-center"> @yield('titulo-contenido') </h1>
            @yield('contenido')
        </div>
        {{-- Sidebar --}}
    </div>
    {{-- Footer --}}
@endsection