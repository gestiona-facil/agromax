@extends('main')

@section() 

<flow-navbar>
    <flow-navbar-item :to="{ name: 'vacas' }">Vacas </flow-navbar-item>
    <flow-navbar-item :to="{ name: 'toros' }">Toros</flow-navbar-item>
    <flow-navbar-item :to="{ name: 'levante-ordeño' }">Levante Ordeño</flow-navbar-item>
    <flow-navbar-item :to="{ name: 'finanzas' }">Finanzas</flow-navbar-item>
</flow-navbar>

@endsection


<flow-navbar>
    <flow-navLogo link="" alt="Flowbite logo" image-url="">
    Agromax Prueba Navbar
    </flow-navLogo>
    <flow-navCol :isShowMenu="isShowMenu"> 
        <flow-navLink Link="vacas">Vacas </flow-navLink>
        <flow-navLink link="#">Toros</flow-navLink>
        <flow-navLink link="#">Levante Ordeño</flow-navLink>
        <flow-navLink link="finanzas">Finanzas</flow-navLink>
    </flow-navcol>
</flow-navbar>
<!-- El componente NavbarCollapse es un componente personalizado que se utiliza en
     el código para crear un menú de navegación desplegable. La propiedad isShowMenu
      se utiliza para determinar si el menú está actualmente desplegado o no.
       Si isShowMenu es true, el menú se muestra, y si es false, el menú se oculta.

En resumen, el componente NavbarCollapse controla la visibilidad del
 menú de navegación desplegable en función del valor de la propiedad isShowMenu.-->
