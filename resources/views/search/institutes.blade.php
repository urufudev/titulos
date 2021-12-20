@extends('layouts.frontend.tailwind')

@section('title','Institutos de la Región de Ayacucho')

@section('content')
<div>



    <main class="relative -mt-32">
        <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
          <div class="bg-gray-100 rounded-lg shadow overflow-hidden px-4 py-12">
            <div class=" mx-auto">
              <div>
                @forelse ($institutes as $type => $instituteArray)
                
                <h2 class="text-3xl font-semibold leading-normal mt-0 mb-5 text-gray-800" >{{$type}}</h2>
                
                <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 m-5">
                    
                                           
                     @foreach ($instituteArray as $institute)
                         
                       
                    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                      <div class="flex-1 flex flex-col p-8">
                        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{$institute->name}}" alt="">
                        <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$institute->name}}</h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                          <dt class="sr-only">Title</dt>
                          <dd class="text-gray-500 text-sm">{{$institute->address}}</dd>
                          <dt class="sr-only">Role</dt>
                          
                        </dl>
                      </div>
                      <div>
                        <div class="-mt-px flex divide-x divide-gray-200">
                          <div x-data="{ tooltip: false }"  class="w-0 flex-1 flex">
                            <a x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                              <!-- Heroicon name: solid/mail -->
                              
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                              </svg>
                              <span class="ml-3">{{$institute->modular}}</span>
                            </a>
                            <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-full -translate-y-full bg-black bg-opacity-75 rounded-lg shadow-lg">
                                  Codigo Modular
                                </div>
                            </div>
                          </div>
                          <div x-data="{ tooltip: false }" class="-ml-px w-0 flex-1 flex">
                           
                            <a x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                <!-- Heroicon name: solid/phone -->
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                  </svg>
                                <span class="ml-3">{{$institute->local}}</span>
                            </a>
                            <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-full -translate-y-full bg-black bg-opacity-75 rounded-lg shadow-lg">
                                  Codigo de Local
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach


                    
                   
                  </ul>

                  @empty
                  @endforelse
                
              </div>
            </div>
          </div>
        </div>

    
  </main>


    @section('page-scripts')
    
    
    @endsection


</div>

@endsection
