@extends('main')

@section('app')
    {{-- Header --}}
    @include('agricultura.maiz.layout.header')
    <div>
        <div class="pt-5">
            <h1 class="py-2 text-3xl text-center"> @yield('titulo-contenido') </h1>
            @yield('contenido')
        </div>
        {{-- Sidebar --}}
    </div>
    {{-- Footer --}}
@endsection