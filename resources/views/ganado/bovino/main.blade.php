@extends('main')

@section('app')
    {{-- Header --}}
    @include('ganado.bovino.layout.header')
    <div>
        <div class="pt-5">
            <h1 class="py-2 text-3xl text-center"> @yield('titulo-contenido') </h1>
            @yield('contenido')
        </div>
        {{-- Sidebar --}}
        {{-- @include('ganado.bovino.layout.sidebar') --}}
    </div>
    {{-- Footer --}}
@endsection