<!-- component -->
<div id="Main" class="xl:rounded-r transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full  w-full sm:w-64 bg-gradient-to-r from-green-700 to-amber-700 border border-gray-700 flex-col">

  <div class="mt-6 flex flex-col justify-start items-center  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
    <button class="flex jusitfy-start items-center space-x-6 w-full  focus:outline-none  focus:text-indigo-400  text-white rounded ">
      <svg class="fill-stroke " width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 4H5C4.44772 4 4 4.44772 4 5V9C4 9.55228 4.44772 10 5 10H9C9.55228 10 10 9.55228 10 9V5C10 4.44772 9.55228 4 9 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M19 4H15C14.4477 4 14 4.44772 14 5V9C14 9.55228 14.4477 10 15 10H19C19.5523 10 20 9.55228 20 9V5C20 4.44772 19.5523 4 19 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M9 14H5C4.44772 14 4 14.4477 4 15V19C4 19.5523 4.44772 20 5 20H9C9.55228 20 10 19.5523 10 19V15C10 14.4477 9.55228 14 9 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M19 14H15C14.4477 14 14 14.4477 14 15V19C14 19.5523 14.4477 20 15 20H19C19.5523 20 20 19.5523 20 19V15C20 14.4477 19.5523 14 19 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <p class="text-base leading-4 font-bold ">Dashboard</p>
    </button>
    <button class="flex jusitfy-start items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
      <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <p class="text-base leading-4 font-bold ">Users</p>
    </button>
  </div>
  {{-- dropdown para vacas --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="vaca-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Terrenos</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='
        width="24" 
        height="24" 
        class="transform"
        data-icon-toggleable
        '
      />
    </button>
    <div data-menu="terreno-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('terreno.create') }}" class="flex justify-start items-center space-x-6 hover:text-Black focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('terreno.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>
  
  {{--dropdown para toros --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="toro-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Semillas</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="semilla-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('semilla.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('semilla.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>
  {{--dropdown para engorde --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="siembra-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Siembras</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="siembra-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('siembra.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('siembra.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>
  {{--dropdown para cria - levante --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="levante-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Cosechas</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="cosecha-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('cosecha.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('cosecha.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>
  {{--dropdown para lecheria --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="riego-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Riegos</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24"
        data-icon-toggleable 
        class="transform"'
      />
    </button>
    <div data-menu="riego-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('riego.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('riego.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
    {{--dropdown para finanzas --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="finanzas-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Finanzas</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="finanza-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('finanza.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('finanza.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>


</div>

@section('post-script')
<script>
function mostrarMenu(id){
  let el = document.getElementById(id);
  let icon = el.querySelector('[data-icon-toggleable]');
  let menus = document.querySelectorAll(`[data-menu="${id}"]`);

  el.addEventListener('click', () => {

    if(icon) icon.classList.toggle('rotate-180');
    if(menus.length){
      menus.forEach((menu) => {
        if(menu.classList.contains('flex')){
          menu.classList.replace('flex', 'hidden');
        }else{
          menu.classList.replace('hidden', 'flex');
        }
      });
    }

  });
}

//dropdown IDS
[
  'vaca-btn',
  'toro-btn',
  'engorde-btn',
  'levante-btn',
  'lecheria-btn'
].forEach((id) => {
  mostrarMenu(id)
});

let Main = document.getElementById("Main");
let open = document.getElementById("open");
let close = document.getElementById("close");

const showNav = (flag) => {
  if (flag) {
    Main.classList.toggle("-translate-x-full");
    Main.classList.toggle("translate-x-0");
    open.classList.toggle("hidden");
    close.classList.toggle("hidden");
  }
};
</script>
@endsection