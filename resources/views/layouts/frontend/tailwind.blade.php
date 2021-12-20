<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Consulta de Titulos DREA |@yield('title')</title>
    <meta name="description" content=" @yield('title') Titulos DREA, Titulos Direccion regional de educacion de ayacucho" />
    <meta name="keywords" content=" @yield('title') ,Titulos DREA, Titulos Direccion regional de educacion de ayacucho,DREA, DRE AYAC, DREAYACUCHO, Dirección Regional de Educación de Ayacucho, Dirección Regional de Educación, Educación" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="{{asset('images/drea/logo.ico')}}" type="image/x-icon" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet">

    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    @livewireStyles
</head>
<body class="bg-gray-200 flex flex-col h-screen justify-between">
    <div id="app" >

      <div >
        {{-- Nav --}}
        <div   x-data="{ open: false }" class="relative bg-sky-700 pb-32 overflow-hidden">
          <!-- Menu open: "bg-sky-900", Menu closed: "bg-transparent" -->
          <nav x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'bg-sky-900': open, 'bg-transparent': !(open) }"  class="bg-transparent relative z-10 border-b border-teal-500 border-opacity-25 lg:bg-transparent lg:border-none">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
              <div class="relative h-16 flex items-center justify-between lg:border-b lg:border-sky-800">
                <div class="px-2 flex items-center lg:px-0">
                  <div class="flex-shrink-0">
                    <img class="block h-12 w-auto" src="{{asset('images/drea/logo_admin.png')}}" alt="Workflow">
                  </div>
                  <div class="hidden lg:block lg:ml-6 lg:space-x-4">
                    <div class="flex">
                      <!-- Current: "bg-black bg-opacity-25", Default: "hover:bg-sky-800" -->
                      <a href="{{route('front.index')}}" class="@if(Route::is('front.index')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif   rounded-md py-2 px-3 text-sm font-medium text-white">Inicio</a>
                      
                      <a href="{{route('front.search')}}" class="@if(Route::is('front.search')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif   rounded-md py-2 px-3 text-sm font-medium text-white">Consulta de Titulos</a>
      
                      <a href="{{route('front.institutes')}}" class="@if(Route::is('front.institutes')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif rounded-md py-2 px-3 text-sm font-medium text-white">Institutos</a>
      
                      <a href="{{route('front.about')}}" class="@if(Route::is('front.about')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif rounded-md py-2 px-3 text-sm font-medium text-white">Acerca</a>
      
                      <a href="http://www.dreayacucho.gob.pe/" class=" hover:bg-sky-800 rounded-md py-2 px-3 text-sm font-medium text-white">Página DREA</a>
                    </div>
                  </div>
                </div>
      
                <div  class="flex lg:hidden">
                  <!-- Mobile menu button -->
                  <button x-on:click.prevent="open = true" type="button" class="p-2 rounded-md inline-flex items-center justify-center text-sky-200 hover:text-white hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.
      
                      Heroicon name: outline/menu
      
                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg x-description="Icon when menu is closed.
      
                    Heroicon name: outline/menu" x-state:on="Menu open" x-state:off="Menu closed" class="flex-shrink-0 h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" class="block flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Icon when menu is open.
      
                      Heroicon name: outline/x
      
                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg svg x-description="Icon when menu is open.
      
                    Heroicon name: outline/x" x-state:on="Menu open" x-state:off="Menu closed" class="flex-shrink-0 h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" class="hidden flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
      
              </div>
            </div>
      
            <!-- Nav Mobile. -->
            <div x-show="open" x-on:click.away="open = false" class="bg-sky-900 lg:hidden" id="mobile-menu">
              <div class="pt-2 pb-3 px-2 space-y-1">
                <!-- Current: "bg-black bg-opacity-25", Default: "hover:bg-sky-800" -->
                <a href="{{route('front.index')}}" class="@if(Route::is('front.index')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif block rounded-md py-2 px-3 text-base font-medium text-white">Inicio</a>
      
                <a href="{{route('front.search')}}" class="@if(Route::is('front.search')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif block rounded-md py-2 px-3 text-base font-medium text-white">Consulta de Titulos</a>

                <a href="{{route('front.institutes')}}" class="@if(Route::is('front.institutes')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif block rounded-md py-2 px-3 text-base font-medium text-white">Institutos</a>
      
                <a href="{{route('front.about')}}" class="@if(Route::is('front.about')) bg-black bg-opacity-25 @else hover:bg-sky-800 @endif block rounded-md py-2 px-3 text-base font-medium text-white">Acerca</a>
      
                <a href="http://www.dreayacucho.gob.pe/" class="hover:bg-sky-800 block rounded-md py-2 px-3 text-base font-medium text-white">Página DREA</a>
              </div>
              
            </div>
          </nav>
          <!-- Menu open: "bottom-0", Menu closed: "inset-y-0" -->
          <div aria-hidden="true"  x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'bottom-0': open, 'inset-y-0': !(open) }" class="inset-y-0 absolute inset-x-0 left-1/2 transform -translate-x-1/2 w-full overflow-hidden lg:inset-y-0">
            <div class="absolute inset-0 flex">
              <div class="h-full w-1/2" style="background-color: #0a527b;"></div>
              <div class="h-full w-1/2" style="background-color: #065d8c;"></div>
            </div>
            <div class="relative flex justify-center">
              <svg class="flex-shrink-0" width="1750" height="308" viewBox="0 0 1750 308" xmlns="http://www.w3.org/2000/svg">
                <path d="M284.161 308H1465.84L875.001 182.413 284.161 308z" fill="#0369a1" />
                <path d="M1465.84 308L16.816 0H1750v308h-284.16z" fill="#065d8c" />
                <path d="M1733.19 0L284.161 308H0V0h1733.19z" fill="#0a527b" />
                <path d="M875.001 182.413L1733.19 0H16.816l858.185 182.413z" fill="#0a4f76" />
              </svg>
            </div>
          </div>
          <header class="relative py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <h1 class="text-3xl font-bold text-white">
                @yield('title')
              </h1>
            </div>
          </header>
        </div>
      
       
       @yield('content')
      </div>

      

    </div>
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
   
    @livewireScripts
    @yield('page-scripts')
</body>

<!-- This example requires Tailwind CSS v2.0+ -->
@include('layouts.frontend.footer')

</html>