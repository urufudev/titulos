@extends('layouts.frontend.tailwind')



@section('content')
<div>



    <main class="relative -mt-32">
        <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
          <div class="bg-gray-100 rounded-lg shadow overflow-hidden">
            <div class="relative bg-white overflow-hidden">



              <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
                <svg class="w-full absolute top-0  transform translate-x-64 -translate-y-8"   fill="none" viewBox="0 0 640 784">
                  <defs>
                    <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                      <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                  </defs>
                  <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                  <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
                </svg>
              </div>

              <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
                

                <main class="mt-2 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
                  <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                      <h1>
                        {{-- <span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Coming soon</span> --}}
                        <span class=" block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                          <span class="block text-gray-900">Sistema de Consulta de</span>
                          <span class="block text-sky-600">Titulos - DREA </span>
                        </span>
                      </h1>
                      <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Si deseas efectuar una consulta sobre tu título profesional obtenido de una Escuela o Institututo de Educación Superior Pedagógico o Tecnológico de la Región Ayacucho, 
                        puedes hacerlo ingresando tu número de DNI o documento de identidad asociado a dicho título.

                      </p>
                      <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                        <p class="text-base font-medium text-gray-900">
                          Consulta si estas registrado en el sistema.
                        </p>
                        <div class="mt-3 ">
                          <a href="{{route('front.search')}}">
                            
                            <button  class="inline-flex items-center  px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-sky-800 shadow-sm hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 sm:mt-0 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2  h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                              </svg>
                              Ir a Consultar
                            </button>
                            
                          </a> 
                          
                        </div>
                        <p class="mt-6 text-sm text-gray-500">
                          Puedes consultar la información general de datos.
                          <a href="{{route('front.about')}}" class="font-medium text-gray-900 underline">Información de datos</a>.
                        </p>
                      </div>
                    </div>
                    <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                      <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                        <defs>
                          <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                          </pattern>
                        </defs>
                        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                      </svg>
                      
                      <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <button type="button" class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                          <span class="sr-only">Watch our video to learn more</span>
                          <img class="w-full" src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
                          
                        </button>
                      </div>
                    </div>
                  </div>
                </main>
              </div>
            </div>

          </div>
        </div>

    
  </main>
  <!-- This example requires Tailwind CSS v2.0+ -->



  


    @section('page-scripts')
    
    
    @endsection


</div>

@endsection
