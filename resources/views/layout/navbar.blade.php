<div class="dark:bg-cyan-700">
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
                          <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Bovenkleding</a>
                      </li>
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Onderkleding</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Schoenen</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Accesoires</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Sale</a>
                  </li>
                  </ul>

                  <div class="md:w-2/12 justify-end flex items-center space-x-4 xl:space-x-8">
                      {{-- <div class="hidden lg:flex items-center">
                          <button onclick="toggleSearch()" aria-label="search items" class="w-5 text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                              <img class="transform rotate-90" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                              <img class="transform rotate-90 hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                          </button>
                          <input id="searchInput" type="text" placeholder="search" class="hidden text-sm text-gray-600 rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1" />
                      </div> --}}
                      <div class="hidden md:flex items-center space-x-4">
                        <a aria-label="my account" href="{{route('account')}}" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline p-0.5 rounded">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2.svg" alt="account">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2dark.svg" alt="account">
                        </a>
                        <a aria-label="Favourites" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline p-0.5 rounded">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3.svg" alt="Favourites">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3dark.svg" alt="Favourites">
                        </a>
                        <a aria-label="Bag" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline p-0.5 rounded">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4.svg" alt="bag">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4dark.svg" alt="bag">
                        </a>
                    </div>

                      <div class="flex lg:hidden">
                          <button aria-label="show options" onclick="mdOptionsToggle()" class="text-black hidden md:flex focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                              <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                              <img class=" hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                          </button>

                          <button aria-label="open menu" onclick="openMenu()" class="text-black md:hidden focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                              <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                              <img class=" hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- For small screen -->
          {{-- <div id="mobile-menu" class="hidden absolute z-10 inset-0 md:hidden bg-white flex flex-col h-screen w-full">
              <div class="flex items-center justify-between border-b border-gray-200 pb-4 p-4">
                  <div class="flex items-center space-x-3">
                      <div>
                          <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                          <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">  
                      </div>
                      <input type="text" placeholder="Search for products" class="text-sm text-gray-600 placeholder-gray-600 focus:outline-none" />
                  </div>

                  <button onclick="closeMenu()" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6.svg" alt="cross">
                      <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6dark.svg" alt="cross">  
                  </button>
              </div>
              <div class="mt-6 p-4">
                  <ul class="flex flex-col space-y-6">
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                              Home
                              <div>
                                  <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                  <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">  
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                              Furniture
                              <div>
                                  <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                  <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">  
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                              Lookbook
                              <div>
                                  <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                  <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">  
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                              Support
                              <div>
                                  <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                  <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">  
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="h-full flex items-end">
                  <ul class="flex flex-col space-y-8 bg-gray-50 w-full py-10 p-4">
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                              <div>
                                  <img class="w-5" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                                  <img class="w-5 hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                              </div>
                              <p class="text-base">Cart</p>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0)" class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                              <div>
                                  <img class="w-5" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg" alt="favourites">
                                  <img class="w-5 hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg" alt="favourites">
                              </div>
                              <p class="text-base">Wishlist</p>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> --}}
      </div>
  </div>
</div>



