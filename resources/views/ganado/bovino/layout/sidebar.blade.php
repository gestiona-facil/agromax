@extends('main')

@section('app')
    <flow-sidebar> 
        <flow-navLink Link="vacas">Vacas </flow-navLink>
        <flow-navLink link="#">Toros</flow-navLink>
        <flow-navLink link="#">Levante Ordeño</flow-navLink>
        <flow-navLink link="finanzas">Finanzas</flow-navLink>
        <flow-navLink link="LogOut">Cerrar Sesion</flow-navLink>
    </flow-sidebar>
@endsection

<div class="sidebar">
    <ul class="sidebar-nav">
        <li><a href="{{ route('vacas') }}">Vacas</a></li>
        <li><a href="{{ route('toros') }}">Toros</a></li>
        <li><a href="{{ route('levante') }}">Levante</a></li>
        <li><a href="{{ route('ordenio') }}">Ordeño</a></li>
        <li><a href="{{ route('finanzas') }}">Finanzas</a></li>
    </ul>
    <div class="sidebar-footer">
        <a href="{{ route('cerrar_sesion') }}">Cerrar sesión</a>
    </div>
</div>
<!--ambos los hice yo, claro con algunos eerrores que me corrigio chatgpt pq es que flowbite-vue no ofrecia un codigo como tal,
aunque he pensado que tal vez podemos revisar flowbite normal y ver los componentes de los que necesitemos estructura
y lo pegamos en las etiqyetas aqui como estamos haciendo, claro solo el html-->