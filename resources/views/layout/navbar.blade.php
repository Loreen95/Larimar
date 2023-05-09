<nav x-data="{ open: false }" class="dark:bg-cyan-700">
  <div>
      <div class="relative">
          <!-- For md screen size -->
          <div id="md-searchbar" class="bg-white hidden lg:hidden py-5 px-6 items-center justify-between">
              <div class="flex items-center space-x-3 text-gray-800">
                  <div>
                    <span class="font-sans text-3xl text-white">Larimar</span>
                  </div>
                  <input type="text" placeholder="Search for products" class="text-sm leading-none text-gray-600 focus:outline-none" />
              </div>
              <div class="space-x-6">
                  <button aria-label="view favourites" class="text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                    <span class="font-sans text-3xl text-white">Larimar</span>
                  </button>
                  <button aria-label="go to cart" class="text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                    <span class="font-sans text-3xl text-white">Larimar</span>
                  </button>
              </div>
          </div>
          <!-- For md screen size -->

          <!-- For large screens -->
          <div class="dark:bg-cyan-700 bg-gray-50 px-6 py-9">
            <div class="container mx-auto flex items-center justify-between">
              <h1 class="md:w-2/12 cursor-pointer text-gray-800" aria-label="the Crib.">
                <a href="{{route('welcome')}}"><span class="font-sans text-3xl text-white">Larimar</span></a>
              </h1>
          
              <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                <li>
                  <a href="{{route('welcome')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Home</a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Nieuw</a>
                </li>
                <li>
                  <div x-data="{ open: false }" x-on:mouseleave="open = false">
                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline" x-on:mouseenter="open = true">Bovenkleding</a>
                    <div x-show="open" x-on:mouseenter="open = true" x-on:click.away="open = false" class="absolute z-10 bg-white shadow-md py-2 rounded-md" x-on:mouseenter="open = true">
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Truien</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Jassen</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Hoodies</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }" x-on:mouseleave="open = false">
                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline" x-on:mouseenter="open = true">Onderkleding</a>
                    <div x-show="open" x-on:mouseenter="open = true" x-on:mouseleave="open = false" class="absolute z-10 bg-white shadow-md py-2 rounded-md" x-on:mouseenter="open = true">
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Jeans</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Ondergoed</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Rokken</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }" x-on:mouseleave="open = false">
                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline" x-on:mouseenter="open = true">Schoenen</a>
                    <div x-show="open" x-on:mouseenter="open = true" x-on:mouseleave="open = false" class="absolute z-10 bg-white shadow-md py-2 rounded-md" x-on:mouseenter="open = true">
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Sneakers</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Laarzen</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Slippers</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }" x-on:mouseleave="open = false">
                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline" x-on:mouseenter="open = true">Accesoires</a>
                    <div x-show="open" x-on:mouseenter="open = true" x-on:mouseleave="open = false" class="absolute z-10 bg-white shadow-md py-2 rounded-md" x-on:mouseenter="open = true">
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Sieraden</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Tassen</a>
                      <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Overigen</a>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Sale</a>
                </li>
              </ul>
              <div class="hidden md:flex items-center space-x-4">
                <div x-data="{ open: false }" @click.away="open = false">
                  <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2.svg" alt="account" @click="open = !open">
                  <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2dark.svg" alt="account" @click="open = !open">
                  <div x-show="open" class="absolute z-10 bg-white shadow-md py-3 rounded-md" style="top: 4.6rem;">
                      @guest
                      <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Inloggen</a>
                      <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Registreren</a>
                      @else
                      <div class="px-4">
                        <div class="flex items-center justify-between">
                          <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                          <button @click="open = false" class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-500">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                          </button>
                        </div>
                          <div class="pt-4 pb-1 border-t border-gray-200">
                              <div class="relative">
                                  <x-dropdown-link :href="route('profile.edit')" class="pl-10">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-0 w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                      </svg>
                                      {{ __('Favorieten') }}
                                  </x-dropdown-link>
                              </div>
                              <div class="relative">
                                  <x-dropdown-link :href="route('profile.edit')" class="pl-10">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-0 w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                      </svg>                              
                                      {{ __('Bestellingen') }}
                                  </x-dropdown-link>
                              </div>
                              <div class="relative">
                          <x-dropdown-link :href="route('profile.edit')" class="pl-10">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-0 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                          </svg>                                      
                          {{ __('Instellingen') }}
                        </x-dropdown-link>
                      </div>
                    <!-- Authentication -->
                      <div class="relative">
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="pl-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-0 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            {{ __('Uitloggen') }}
                          </x-dropdown-link>
                        </form>
                      </div>                                  
                    </div>
                    @endguest
                  </div>
                </div>
              </div>
              <a aria-label="Bag" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline p-0.5 rounded">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4.svg" alt="bag">
               <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4dark.svg" alt="bag">
              </a>
              <div class="flex lg:hidden">
                <div class="-mr-2 flex items-center sm:hidden">
                  <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
          </div>
        <!-- For small screen -->
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Nieuw') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">Categoriëen</div>
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Bovenkleding') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Onderkleding') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Schoenen') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Accesoires') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Sale') }}
                    </x-responsive-nav-link>
                </div>
                <div class="mt-3 space-y-1">
                    <div class="px-4 border-t border-gray-200">
                        <div class="font-medium text-base text-gray-800">Account</div>
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Instellingen') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Verlanglijstje') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Winkelmandje') }}
                        </x-responsive-nav-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Uitloggen') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>