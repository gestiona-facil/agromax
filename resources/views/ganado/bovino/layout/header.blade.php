<flow-nav-bar class="shadow">
    <template #logo>
      {{-- <flow-nav-logo link="#inicio" alt="Flowbite logo" image-url="https://flowbite.com/docs/images/logo.svg">
        LOGO
      </flow-nav-logo> --}}
      LOGO
    </template>
    <template #default>
      <flow-nav-collapse isShowMenu="true">
        {{-- <flow-nav-link isActive link="#">Home</flow-nav-link>
        <flow-nav-link link="#">Services</flow-nav-link>
        <flow-nav-link link="#">Pricing</flow-nav-link> --}}
        <flow-nav-link link="{{route('logout')}}">Salir</flow-nav-link>
      </flow-nav-collapse>
    </template>
</flow-nav-bar>
