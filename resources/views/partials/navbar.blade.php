<header class="header">
    <a href="#" class="logo">
        <img src="img/logosena.png" alt="">
    </a>
    <nav class="navbar">
        <a href="{{ route ('home') }}">inicio</a> 
        <a href="{{ route('nosotros') }}">acerca de</a>
        <a href="{{ route('menu') }}">menu</a>
        <a href="{{ route('productos') }}">productos</a>
        <a href="{{ route('opiniones') }}">opiniones</a>
        <a href="{{route('contactos')}}">contacto</a>
        <a href="{{ route('recetas') }}">Recetas</a>
    </nav>
    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <a href="{{ route ('cart.index') }}">
            <div class="fas fa-shopping-cart" id="cart-btn">
                @if(\Cart::getTotalQuantity() != 0)
                    {{ \Cart::getTotalQuantity() }}
                @endif
            </div>
        </a>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="que estas buscando...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
                <!-- Settings Dropdown -->
                <div class="ml-3 relative " >
                    <x-dropdown align="right" width="48"  >
                        <x-slot name="trigger" >
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition ">
                                    <img class="h-8 w-8 rounded-full object-cover " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button >
                            @else
                                <span class="inline-flex rounded-md" >
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>
                        <!--administracion de cuentas-->
                        <x-slot name="content" >
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administrar cuenta') }}
                            </div>
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            {{-- url admin --}}
                            <x-dropdown-link href="{{ route('admin.home') }}">
                                {{ __('Admin') }}
                            </x-dropdown-link>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
</header>