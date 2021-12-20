<div>



    <main class="relative -mt-32">
        <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
            <div class="bg-white rounded-lg shadow overflow-hidden px-4 py-12">
                <div class="max-w-2xl mx-auto">
                    <div>
                        <div class="text-center">

                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                            <h2 class="mt-2 text-lg font-medium text-gray-900">Consulta tu titulo</h2>
                            <p class="mt-1 text-sm text-gray-500">
                                Ingresa tu DNI o Carnet de Extrangeria, confirma el captcha y podras realizar la
                                busqueda de tu titulo.
                            </p>
                        </div>

                        <div class="py-2 px-4  sm:rounded-lg sm:px-10">
                            {{-- <span>{{ $tab }}</span> --}}
                            <div class="max-w-3xl mx-auto">
                                <div x-data="{
                                            openTab: {{ $tab }},
                                            activeClasses: 'border-sky-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm',
                                            inactiveClasses: 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm'
                                          }">
                                    <div class="mt-6 sm:mt-2 2xl:mt-5">
                                        <div class="border-b border-gray-200">
                                            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">



                                                <nav class="-mb-px flex space-x-8 overflow-x-auto" aria-label="Tabs">


                                                    <ul class="flex border-b">
                                                        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }"
                                                            class="-mb-px mr-1">
                                                            <a wire:click="updateTab1"
                                                                :class="openTab === 1 ? activeClasses : inactiveClasses"
                                                                class="bg-white inline-block py-2 px-4 font-semibold"
                                                                style="cursor: pointer;">
                                                                DNI/CE
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <ul class="flex border-b">
                                                        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }"
                                                            class="-mb-px mr-1">
                                                            <a wire:click="updateTab2"
                                                                :class="openTab === 2 ? activeClasses : inactiveClasses"
                                                                class="bg-white inline-block py-2 px-4 font-semibold"
                                                                style="cursor: pointer;">
                                                                Nombres y Apellidos
                                                            </a>
                                                        </li>

                                                    </ul>

                                                </nav>

                                            </div>
                                        </div>
                                    </div>

                                    <div x-show="openTab === 1">
                                        @include('partials.alert-search')



                                        <div class="mt-8 max-w-5xl mx-auto px-4 pb-12 sm:px-6 lg:px-8">
                                            <h2 class="text-sm font-medium text-gray-500">Consulta por DNI/CE</h2>
                                            <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-1">

                                                {{-- Detalles de información --}}
                                                <div
                                                    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm  hover:border-gray-400 ">
                                                    <form action="#results" wire:submit.prevent="findStudent">
                                                        @csrf
                                                        <div>
                                                            <label for="document_number"
                                                                class="block text-sm font-medium text-gray-700">
                                                                DNI / CE
                                                            </label>
                                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                                <input autofocus x-ref="dni"
                                                                    wire:model.defer="document_number"
                                                                    placeholder="N° Documento" name="document_number"
                                                                    type="text"
                                                                    class=" @error('document_number') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500  @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                                                    autocomplete="off" maxlength="10">

                                                                @error('document_number')
                                                                    <div
                                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                        <!-- Heroicon name: solid/exclamation-circle -->
                                                                        <svg class="h-5 w-5 text-red-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            @error('document_number')
                                                                <p class="mt-2 text-sm text-red-600">{{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>


                                                        <div>
                                                            <div class="flex items-center justify-center mt-5 ">
                                                                @if ($tab === 1)
                                                                    <div x-show="openTab === 1">
                                                                        {!! captcha_img('math') !!}
                                                                    </div>
                                                                @endif


                                                                <button tabindex="-1" type="button"
                                                                    wire:click="reloadCaptcha"
                                                                    class=" ml-2 inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                                    <div wire:loading.remove
                                                                        wire:target="reloadCaptcha_1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-6 w-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                                        </svg>
                                                                    </div>
                                                                    <div wire:loading wire:target="reloadCaptcha_1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="animate-spin h-6 w-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                            </div>


                                                            <label for="document_number"
                                                                class="mt-3 block text-sm font-medium text-gray-700">
                                                                Ingrese la suma
                                                            </label>
                                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                                <input wire:model.defer="captcha" placeholder="CAPTCHA"
                                                                    name="captcha" type="text"
                                                                    class=" @error('captcha') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500  @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                                                    autocomplete="off" maxlength="10">

                                                                @error('captcha')
                                                                    <div
                                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                        <!-- Heroicon name: solid/exclamation-circle -->
                                                                        <svg class="h-5 w-5 text-red-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            @error('captcha')
                                                                <p class="mt-2 text-sm text-red-600">{{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>

                                                        <div class="mt-1 flex items-center justify-center">

                                                            <button type="submit"
                                                                class="mt-3 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                                <!-- Heroicon name: solid/mail -->
                                                                <div wire:loading.remove wire:target="findStudent">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="-ml-1 mr-2 h-5 w-5" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                                                    </svg>
                                                                </div>

                                                                <div wire:loading wire:target="findStudent">

                                                                    <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12" cy="12"
                                                                            r="10" stroke="currentColor"
                                                                            stroke-width="4"></circle>
                                                                        <path class="opacity-75" fill="currentColor"
                                                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                                        </path>
                                                                    </svg>
                                                                </div>


                                                                Buscar
                                                            </button>
                                                        </div>

                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div x-show="openTab === 2">

                                        @include('partials.alert-search')

                                        <div class="mt-8 max-w-5xl mx-auto px-4 pb-12 sm:px-6 lg:px-8">
                                            <h2 class="text-sm font-medium text-gray-500">Consulta por Nombres y
                                                Apellidos</h2>
                                            <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-1">

                                                {{-- Detalles de información --}}
                                                <div
                                                    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm  hover:border-gray-400 ">
                                                    {{-- <span>{{ $tab }}</span> --}}

                                                    <form wire:submit.prevent="findStudentFullName">
                                                        @csrf


                                                        <div>
                                                            <label for="name"
                                                                class="block text-sm font-medium text-gray-700">
                                                                Nombres
                                                            </label>
                                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                                <input autofocus x-ref="name" wire:model.defer="name"
                                                                    placeholder="Nombres" name="name" type="text"
                                                                    class="capitalize @error('name') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500  @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                                                    autocomplete="off" maxlength="10">

                                                                @error('name')
                                                                    <div
                                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                        <!-- Heroicon name: solid/exclamation-circle -->
                                                                        <svg class="h-5 w-5 text-red-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            @error('name')
                                                                <p class="mt-2 text-sm text-red-600">{{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>


                                                        <div class="mt-5">
                                                            <label for="ap_paterno"
                                                                class="block text-sm font-medium text-gray-700">
                                                                Apellido Paterno
                                                            </label>
                                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                                <input x-ref="ap_paterno" wire:model.defer="ap_paterno"
                                                                    placeholder="Apellido Paterno" name="ap_paterno"
                                                                    type="text"
                                                                    class="capitalize @error('ap_paterno') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500  @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                                                    autocomplete="off" maxlength="10">

                                                                @error('ap_paterno')
                                                                    <div
                                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                        <!-- Heroicon ap_paterno: solid/exclamation-circle -->
                                                                        <svg class="h-5 w-5 text-red-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            @error('ap_paterno')
                                                                <p class="mt-2 text-sm text-red-600">{{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>

                                                        <div class="mt-5">
                                                            <label for="ap_materno"
                                                                class="block text-sm font-medium text-gray-700">
                                                                Apellido Materno
                                                            </label>
                                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                                <input x-ref="ap_materno" wire:model.defer="ap_materno"
                                                                    placeholder="Apellido Materno" name="ap_materno"
                                                                    type="text"
                                                                    class="capitalize @error('ap_materno') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500  @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                                                    autocomplete="off" maxlength="10">

                                                                @error('ap_materno')
                                                                    <div
                                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                        <!-- Heroicon ap_materno: solid/exclamation-circle -->
                                                                        <svg class="h-5 w-5 text-red-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            @error('ap_materno')
                                                                <p class="mt-2 text-sm text-red-600">{{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>


                                                        <div>
                                                            <div class="flex items-center justify-center mt-5">

                                                                @if ($tab === 2)
                                                                    <div x-show="openTab === 2">
                                                                        {!! captcha_img('math') !!}
                                                                    </div>
                                                                @endif


                                                                <button tabindex="-1" type="button"
                                                                    wire:click="reloadCaptcha"
                                                                    class="ml-2 inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                                    <div wire:loading.remove
                                                                        wire:target="reloadCaptcha_2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-6 w-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                                        </svg>
                                                                    </div>
                                                                    <div wire:loading wire:target="reloadCaptcha_2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="animate-spin h-6 w-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                            </div>


                                                            <label for="document_number"
                                                                class="mt-3 block text-sm font-medium text-gray-700">
                                                                Ingrese la suma
                                                            </label>
                                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                                <input wire:model.defer="captcha_2"
                                                                    placeholder="CAPTCHA" name="captcha_2" type="text"
                                                                    class=" @error('captcha_2') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500  @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                                                    autocomplete="off" maxlength="10">

                                                                @error('captcha_2')
                                                                    <div
                                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                        <!-- Heroicon name: solid/exclamation-circle -->
                                                                        <svg class="h-5 w-5 text-red-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            @error('captcha_2')
                                                                <p class="mt-2 text-sm text-red-600">{{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>

                                                        <div class="mt-1 flex items-center justify-center">

                                                            <button type="submit"
                                                                class="mt-3 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                                <!-- Heroicon name: solid/mail -->
                                                                <div wire:loading.remove
                                                                    wire:target="findStudentFullName">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="-ml-1 mr-2 h-5 w-5" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                                                    </svg>
                                                                </div>

                                                                <div wire:loading wire:target="findStudentFullName">

                                                                    <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12" cy="12"
                                                                            r="10" stroke="currentColor"
                                                                            stroke-width="4"></circle>
                                                                        <path class="opacity-75" fill="currentColor"
                                                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                                        </path>
                                                                    </svg>
                                                                </div>


                                                                Buscar
                                                            </button>
                                                        </div>
                                                    </form>



                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>


                        </div>



                        <div class="mx-auto sm:mx-auto sm:w-full sm:max-w-md">

                        </div>

                    </div>
                </div>
            </div>
        </div>


        {{-- Student info --}}
        @if ($students != null)
            <div id="results" wire.ignore class="max-w-screen-lg mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">

                        <div class="flex-1 relative z-0 flex overflow-hidden">
                            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last">

                                @forelse ($students as $name => $studentdetails)
                                    <article>
                                        <!-- Profile header -->
                                        <div>
                                            <div>
                                                <img class="h-32 w-full object-cover lg:h-48"
                                                    src="{{ asset('images/drea/profile/profile-banner.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                                    <div class="flex">
                                                        <img class="h-24 w-24 bg-gray-100 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                                                            src="{{ asset('images/drea/profile/5.png') }}" alt="">
                                                    </div>
                                                    <div
                                                        class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                                                        <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                                            <h1 class="text-2xl font-bold text-gray-900 truncate">

                                                                {{ $name }}

                                                            </h1>
                                                        </div>
                                                        <div
                                                            class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                                            <a href="{{ route('students.pdf', $studentdetails->first()->hashId) }}"
                                                                target="_blank"
                                                                class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                                <!-- Heroicon name: solid/mail -->

                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                                </svg>
                                                                <span>Imprimir</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                                                    <h1 class="text-2xl font-bold text-gray-900 truncate">
                                                        {{ $name }}
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>

                                        <div x-data="{
                openTab: 0,
                activeClasses: 'border-sky-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm',
                inactiveClasses: 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm'
              }">
                                            <!-- Tabs -->
                                            <div class="mt-6 sm:mt-2 2xl:mt-5">
                                                <div class="border-b border-gray-200">
                                                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">



                                                        <nav class="-mb-px flex space-x-8 overflow-x-auto"
                                                            aria-label="Tabs">

                                                            @forelse ($studentdetails as $student)
                                                                <ul class="flex border-b">
                                                                    <li @click="openTab = {{ $loop->index }}"
                                                                        :class="{ '-mb-px': openTab === {{ $loop->index }} }"
                                                                        class="-mb-px mr-1">
                                                                        <a :class="openTab === {{ $loop->index }} ? activeClasses : inactiveClasses"
                                                                            class="bg-white inline-block py-2 px-4 font-semibold"
                                                                            style="cursor: pointer;">
                                                                            {{ $student->institute->name ?: 'Sin datos' }}
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            @empty
                                                            @endforelse


                                                        </nav>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Description list -->
                                            @forelse ($studentdetails as $student)
                                                <div x-show="openTab === {{ $loop->index }}">

                                                    <div class="mt-8 max-w-5xl mx-auto px-4 pb-12 sm:px-6 lg:px-8">
                                                        <h2 class="text-sm font-medium text-gray-500">Detalles</h2>
                                                        <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">

                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-green-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-green-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_number ?: 'Sin datos' }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Número del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-blue-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-blue-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6 " fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                                                                <path
                                                                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_name ?: 'Sin datos' }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Nombre del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}

                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-yellow-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-yellow-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_level ?: 'Sin datos' }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Nivel del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}

                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-red-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-red-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_resnumber ?: 'Sin datos' }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Número de Resolución del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}

                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-indigo-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-indigo-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_regdate_formated }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Fecha de Resolución del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}

                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-teal-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-teal-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_regbook ?: 'Sin datos' }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Libro de Resolución del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}

                                                            {{-- Detalles de información --}}
                                                            <div
                                                                class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">

                                                                <div
                                                                    class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-full inline-block align-middle ">
                                                                    <span
                                                                        class="flex-shrink-0 inline-flex items-center justify-center h-10 w-10 rounded-full bg-sky-100">
                                                                        <span
                                                                            class="text-sm font-medium leading-none text-sky-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>


                                                                <div class="flex-1 min-w-0">
                                                                    <a href="#" class="focus:outline-none">
                                                                        <span class="absolute inset-0"
                                                                            aria-hidden="true"></span>
                                                                        <p class="text-sm font-medium text-gray-900">
                                                                            {{ $student->title_date_formated }}
                                                                        </p>
                                                                        <p class="text-sm text-gray-500 truncate">
                                                                            Fecha de Emisión del Titulo
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            {{-- Detalles de información --}}



                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse


                                        </div>
                                    </article>
                                @empty
                                @endforelse
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </main>


    @section('page-scripts')


    @endsection


</div>
