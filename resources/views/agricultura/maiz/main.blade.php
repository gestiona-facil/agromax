@extends('main')

@section('app')
    {{-- Header --}}
    {{-- @include('agricultura.maiz.layout.header') --}}
    <div class="flex">
        <div class="pt-5 flex-1">
            <h1 class="py-2 text-3xl text-center"> @yield('titulo-contenido') </h1>
            @yield('contenido')
        </div>
        {{-- Sidebar --}}
        {{-- @include('agricultura.maiz.layout.sidebar') --}}
    </div>
    {{-- Footer --}}
@endsection