<!-- component -->
<div id="Main" class="xl:rounded-r transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full  w-full sm:w-64 bg-gradient-to-r from-cyan-700 to-amber-700 border border-gray-700 flex-col">

  <div class="mt-6 flex flex-col justify-start items-center  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
    <button class="flex jusitfy-start items-center space-x-6 w-full  focus:outline-none  focus:text-indigo-400  text-white rounded ">
      <svg class="fill-stroke " width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 4H5C4.44772 4 4 4.44772 4 5V9C4 9.55228 4.44772 10 5 10H9C9.55228 10 10 9.55228 10 9V5C10 4.44772 9.55228 4 9 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M19 4H15C14.4477 4 14 4.44772 14 5V9C14 9.55228 14.4477 10 15 10H19C19.5523 10 20 9.55228 20 9V5C20 4.44772 19.5523 4 19 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M9 14H5C4.44772 14 4 14.4477 4 15V19C4 19.5523 4.44772 20 5 20H9C9.55228 20 10 19.5523 10 19V15C10 14.4477 9.55228 14 9 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M19 14H15C14.4477 14 14 14.4477 14 15V19C14 19.5523 14.4477 20 15 20H19C19.5523 20 20 19.5523 20 19V15C20 14.4477 19.5523 14 19 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <a href="{{ route('ganado.bovino.inicio') }}" class="text-base leading-4 font-bold ">Inicio</a>
    </button>
  </div>
  {{-- dropdown para vacas --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="vaca-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Vacas</p>
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
    <div data-menu="vaca-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1">
      <a href="{{ route('vaca.create') }}" class="flex justify-start items-center space-x-6 hover:text-Black focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('vaca.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
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
      <p class="text-sm leading-5  uppercase">Toros</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="toro-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('toro.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('toro.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>
  {{--dropdown para engorde --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="engorde-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Ganado de ceba</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="engorde-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('engorde.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('engorde.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
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
      <p class="text-sm leading-5  uppercase">Levante</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24" 
        data-icon-toggleable
        class="transform"'
      />
    </button>
    <div data-menu="levante-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('cria.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('cria.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
  </div>
  {{--dropdown para lecheria --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="lecheria-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5  uppercase">Lecheria</p>
      <x-bladewind.icon 
        name="chevron-down" 
        attr='width="24" 
        height="24"
        data-icon-toggleable 
        class="transform"'
      />
    </button>
    <div data-menu="lecheria-btn" class="hidden justify-start  flex-col w-full md:w-auto items-start pb-1 ">
      <a href="{{ route('lecheria.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('lecheria.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="list-bullet"
        />
        <p class="text-base leading-4  ">Lista</p>
      </a>
    </div>
    {{--dropdown para finanzas --}}
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button id="finanza-btn" class="focus:outline-none focus:text-indigo-400 text-left  text-white font-bold flex justify-between items-center w-full py-5 space-x-14  ">
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
      <a href="{{ route('bovino.finanza.create') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
        <x-bladewind.icon
          name="plus"
        />
        <p class="text-base leading-4  ">Agregar</p>
      </a>
      <a href="{{ route('bovino.finanza.index') }}" class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
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
  'lecheria-btn',
  'finanza-btn'
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