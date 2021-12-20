@extends('layouts.frontend.tailwind')

@section('title','Información Sobre Consulta de Titulos de Institutos de la Región de Ayacucho')

@section('content')
<div>



    <main class="relative -mt-32">
        <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
          <div class="bg-white rounded-lg shadow overflow-hidden px-4 py-12">
            <div class=" mx-auto">
              <div>

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
                    <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
                        <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Información General
                        </h2>
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="flow-root mt-10">
                            <ul role="list" class="-mb-8">

                                <li>
                                    <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/check -->
                                                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-900">El reporte emitido no reemplaza al título ni tiene valor oficial para realizar trámites.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            
                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                        <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-900">La información se encuentra registrada por periodos, revise las condiciones específicas según el tipo de título.</p>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="relative pb-8">
                                        <div class="relative flex space-x-3">
                                            <div>
                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/check -->
                                                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-900">Existe información de títulos registrada en las direcciones regionales de educación (o las que hacen sus veces), revise las condiciones específicas según el tipo de título que está consultando.</p>
                                            </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
  
                        <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                        <div x-data="{ open: false }" class="pt-6">
                            <dt class="text-lg">
                            <!-- Expand/collapse question button -->
                            <button @click="open = !open" x-description="Expand/collapse question button" type="button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">
                                    Consideraciones para uso de datos de títulos tecnológicos
                                </span>
                                <span class="ml-6 h-7 flex items-center">
                                <svg x-description="Expand/collapse icon, toggle classes based on question open state.

                                Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" class="rotate-0 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                </span>
                            </button>
                            </dt>
                            <dd x-show="open" class="mt-2 pr-12"  id="faq-0">
                                <ul role="list" class="-mb-8 pl-5">

                                    <li>
                                        <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
                                                <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-900 text-justify">
                                                            El reporte de títulos corresponde a la información registrada en el Minedu a partir del 1 de enero del 2016 hasta la fecha actual, 
                                                            en el marco de la Norma Técnica para el Procedimiento de Registro y Visación de Títulos de Educación Superior Tecnológica, aprobada mediante al R.V.M. 073-2015-MINEDU y la Ley 30512, Ley de Institutos y Escuelas de Educación Superior y de la Carrera Pública de sus Docentes.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                            <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/check -->
                                                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-900 text-justify">
                                                    La información mostrada corresponde a la <a class="font-medium">CONSULTA EN LÍNEA</a>  del registro de títulos de IEST existente en el sistema de información que el Minedu establece para tal fin, los cuales han sido remitidos por los IEST para su validación en el Minedu y posterior registro en dicho sistema de información.
                                                </p>
                                            </div>
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </li>
    
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
                                                <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-900 text-justify">
                                                        En caso se haya obtenido el título en el periodo comprendido en la consulta y este no se visualice, se recomienda comunicarse con el IEST para verificar su remisión al Minedu.
                                                    </p>
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                            <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/check -->
                                                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-900 text-justify">
                                                    Títulos emitidos bajo el marco de la Ley N° 29394, Ley de Institutos y Escuelas de Educación Superior y su Reglamento, aprobado mediante D.S N° 004-2010-ED, correspondientes al periodo 2010-2015 registrados en el Registro de Títulos de las Direcciones Regionales de Educación.
                                                </p>
                                            </div>
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="relative pb-8">
                                            <div class="relative flex space-x-3">
                                                <div>
                                                <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-900 text-justify">
                                                        En caso se haya consultado por un título emitido dentro de este periodo y este no se visualice, se recomienda comunicarse con el IEST para verificar su remisión a la DRE y ésta remita el registro de títulos hacia el Minedu. Si el IEST se encontrara cerrado, se recomienda comunicarse con la DRE de la región a la cual pertenecía el IEST, para solicitar se verifique su registro en el Registro de Títulos de la DRE y ésta remita el registro de títulos hacia el Minedu.
                                                    </p>
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>

                        <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                            <div x-data="{ open: false }" class="pt-6">
                                <dt class="text-lg">
                                <!-- Expand/collapse question button -->
                                <button @click="open = !open" x-description="Expand/collapse question button" type="button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900">
                                        Consideraciones para uso de datos de títulos pedagógicos
                                    </span>
                                    <span class="ml-6 h-7 flex items-center">
                                    <svg x-description="Expand/collapse icon, toggle classes based on question open state.
    
                                    Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" class="rotate-0 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    </span>
                                </button>
                                </dt>
                                <dd x-show="open" class="mt-2 pr-12"  id="faq-0">
                                    <ul role="list" class="-mb-8 pl-5">

                                        <li>
                                            <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                    <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                        <!-- Heroicon name: solid/check -->
                                                        <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                        <div>
                                                            <p class="text-sm text-gray-900 text-justify">
                                                                El reporte de títulos corresponde a información remitida por las direcciones regionales de educación correspondiente a los periodos 2015 y 2016, en el marco de lo establecido por el inciso 3.2 del artículo 3 del Decreto Legislativo N.° 1246 y el Reglamento de la Ley 30512, Ley de Institutos y Escuelas de Educación Superior y de la Carrera Pública de sus docentes.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
                                                <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-900 text-justify">
                                                        La información se encuentra en constante actualización en base a lo reportado por las direcciones regionales de educación o la que haga sus veces.
                                                    </p>
                                                </div>
                                                
                                                </div>
                                            </div>
                                            </div>
                                        </li>
    
                                        <li>
                                            <div class="relative pb-8">
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                    <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                                                        <!-- Heroicon name: solid/check -->
                                                        <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-900 text-justify">
                                                            En caso se requieran modificaciones o correcciones a su información, se recomienda contactarse con la dirección regional de educación de la jurisdicción o la que haga sus veces.
                                                        </p>
                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                
                        <!-- More questions... -->
                        </dl>
                    </div>
                    </div>
                </div>
  
                
                
              </div>
            </div>
          </div>
        </div>

    
  </main>


    @section('page-scripts')
    
    
    @endsection


</div>

@endsection
