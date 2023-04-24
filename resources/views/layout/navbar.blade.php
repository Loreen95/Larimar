<header class="relative">
  <nav aria-label="Top" class="mx-auto max-w-auto">
    <div class="border-b border-gray-200">     
      <div class="flex h-16 items-center">
        {{-- Logo & Home --}}     
        <div class="ml-auto flex items-center">
          <a href="{{route('welcome')}}" class="hover:text-sky-600 ">
            <span class="font-sans text-3xl">Larimar</span>
          </a>
        </div>
        {{-- Account --}}
          <div class="ml-auto flex items-center">
            <div class="flex lg:ml-6">
              <a href="{{route('account')}}" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                <div>Account</div>  
              </a>
            </div>
            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
        
            {{-- Wishlist --}}
            <div class="flex lg:ml-6">
              <a href="{{route('favorites')}}" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <div>Favorieten</div>  
              </a>
            </div>
            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
        
            {{-- Shopping cart --}}
            <div class="flex lg:ml-6">
              <a href="{{route('cart')}}" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
              <div>Winkelmandje</div>  
            </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="mx-auto max-w-4xl">
      <div class="border-b border-gray-200"> 
        <div class="ml-auto flex items-center">  
          <div class="flex h-16 items-center">
            <div class="flex lg:ml-6">
              <a href="{{route('welcome')}}" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <div>Home</div>  
              </a>
            </div>
          </div>
          <div class="flex h-16 items-center">
            <div class="flex lg:ml-6">
              <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <div>Nieuw</div>  
              </a>
            </div>
          </div>          
          <div class="flex h-16 items-center">
            <div class="flex lg:ml-6">
              <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <div>Bovenkleding</div>  
              </a>
            </div>
          </div>
          <div class="flex h-16 items-center">
            <div class="flex lg:ml-6">
              <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
                <div>Onderkleding</div>  
              </a>
            </div>
          </div>
        <div class="flex h-16 items-center">
          <div class="flex lg:ml-6">
            <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
              <div>Schoenen</div>  
            </a>
          </div>
        </div>
        <div class="flex h-16 items-center">
          <div class="flex lg:ml-6">
            <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600 ">
              <div>Accesoires</div>  
            </a>
          </div>
        </div>
        <div class="flex h-16 items-center">
          <div class="flex lg:ml-6">
            <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600">
              <div>Badmode</div>  
            </a>
          </div>
        </div>
        <div class="flex h-16 items-center">
          <div class="flex lg:ml-6">
            <a href="#" class="flex flex-col items-center p-2 text-gray-700 hover:text-sky-600">
              <div>Sale</div>  
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>