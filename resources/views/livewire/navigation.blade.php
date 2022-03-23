<div>
    <nav class="bg-black" x-data="{ open: false }">
        <div class="max-w-7x1 mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">

                <!-- MENÚ MOBILE BOTÓN -->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile  menu button -->
                    <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú</span>
                        <!--Icon when menu is closed. Heroicon name: outline/menu Menu open: "hidden", Menu closed: "block-->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open. Heroicon name: outline/x Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="hidden space-x-4 sm-block sm:-my-px sm:ml-10 sm:flex items-center">
                    <!-- logotipo -->
                    <div class="flex-shrink-0 flex items-center">
                        <img class="hidden lg:hidden h-8 w-auto" src="#" alt="Sport Store">
                        <img class="hidden lg:block h-10 w-auto" src="#" alt="Sport Store">
                        <h2 class="hidden lg:block text-left text-white font-sans">Sport Store</h2>
                    </div>

                    <div class="container flex relative mx-auto">
                        <div x-data="{open: false}" @mouseleave="open = false" class="relative">
                            <button @mouseover="open = true" class="flex items-center p-2 bg-black text-white rounded-md hover:bg-white hover:text-black">
                                <span class="mr-4">Productos</span>
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div x-show="open" class="absolute right-0 w-48 py-2 bg-white rounded-md shadow-xl z-10">
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-black hover:bg-black hover:text-white">
                                        Medias Largas
                                </a>
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-black hover:bg-black hover:text-white">
                                        Medias Sin Pie
                                </a>
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-black hover:bg-black hover:text-white">
                                        Vendas Cobán
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="container flex relative mx-auto">
                        <div x-data="{open: false}" @mouseleave="open = false" class="relative">
                            <button @mouseover="open = true" class="flex items-center p-2 bg-black text-white rounded-md hover:bg-white hover:text-black">
                                <span class="mr-4">Antideslizantes</span>
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div x-show="open" class="absolute right-0 w-48 py-2 bg-black rounded-md shadow-xl z-10">
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-white hover:bg-white hover:text-black">
                                        Diseños
                                </a>
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-white hover:bg-white hover:text-black">
                                        Colores
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="container flex relative mx-auto">
                        <div x-data="{open: false}" @mouseleave="open = false" class="relative">
                            <button @mouseover="open = true" class="flex items-center p-2 bg-black text-white rounded-md hover:bg-white hover:text-black">
                                <span class="mr-4">Promociones</span>
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div x-show="open" class="absolute right-0 w-48 py-2 bg-black rounded-md shadow-xl z-10">
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-white hover:bg-white hover:text-black">
                                        Pack Fútbolero
                                </a>
                                <a href="#"
                                        class="block px-4 py-2 text-sm capitalize text-white hover:bg-white hover:text-black">
                                        Calcetas Dcto
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                

                <!-- Botones de login y registro -->
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- botón de notificación -->
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-white hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-white hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Iniciar
                                Sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-white hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-white text-black block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page">Inicio</a>

                    <div @click.away="open = false" class="relative" x-data="{open : false}">
                        <button @click="open = !open" class="flex flex-row items-center w-full rounded-md bg-black text-white p-2 focus:outline-none hover:bg-white hover:text-black">
                            <p>Productos</p>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="white" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" 
                        class="absolute right-0 w-full mt-2 origin-top-right z-10 rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Medias Largas</a>
                            </div>
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Medias Sin Pie</a>
                            </div>
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Vendas Cobán</a>
                            </div>
                        </div>
                    </div>
                    <div @click.away="open = false" class="relative" x-data="{open : false}">
                        <button @click="open = !open" class="flex flex-row items-center w-full rounded-md bg-black text-white p-2 focus:outline-none hover:bg-white hover:text-black">
                            <p>Antideslizantes</p>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="white" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" 
                        class="absolute right-0 w-full mt-2 origin-top-right z-10 rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Diseños</a>
                            </div>
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Colores</a>
                            </div>
                        </div>
                    </div>
                    <div @click.away="open = false" class="relative" x-data="{open : false}">
                        <button @click="open = !open" class="flex flex-row items-center w-full rounded-md bg-black text-white p-2 focus:outline-none hover:bg-white hover:text-black">
                            <p>Promociones</p>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="white" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" 
                        class="absolute right-0 w-full mt-2 origin-top-right z-10 rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Pack Fútbolero</a>
                            </div>
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-dark">
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-black bg-white hover:bg-black hover:text-white">Calcetas Dcto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>

</div>
