  <div class="h-screen flex flex-col bg-blue-50 pt-20">
  <style>
    .scrollbar-invisible::-webkit-scrollbar {
      display: none;
    }
  
    .scrollbar-invisible {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;     /* Firefox */
    }
  </style>
  <nav class="fixed top-0 right-0 w-full px-6 py-2 z-50 bg-blue-50 backdrop-blur-sm flex justify-between items-center shadow-sm h-20 overflow-visible">
    <!-- Left Side: Logo (floated, doesn't stretch nav) -->
    <div class="relative w-44 h-44 py-2 mt-8">
      <img src="{{ asset('image/logo.png') }}"
           alt="KodigoUI Logo"
           class="absolute -top-4 left-0 w-44 h-44 object-contain" />
    </div>
  
    <!-- Right Side: Search, Buttons, GitHub -->
    <div class="flex items-center space-x-6">
      <!-- Search -->
      <div x-data="{ open: false }" class="relative flex items-center space-x-2">
        <button @click="open = !open" class="p-2 rounded-full hover:bg-gray-300 transition" x-show="!open">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 24 24" stroke-width="1.5"
               stroke="currentColor"
               class="h-7 w-7 text-[#000034]">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </button>
  
        <div x-show="open" x-transition @click.away="open = false" class="relative">
          <input type="text" placeholder="Search..."
                 class="w-64 pl-10 pr-4 py-2 text-[#00001A] border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all duration-300 ease-in-out" />
          <div class="absolute left-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor"
                 class="h-5 w-5 text-gray-500">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
        </div>
      </div>
  
      <!-- Buttons -->
      <x-button size="small" class="!w-[130px] hover:rotate-1 hover:scale-110 bg-[#000034]"
        @mouseenter="$el.classList.add('animate-pulse')"
        @mouseleave="$el.classList.remove('animate-pulse')"
      >
        Documentation
      </x-button>
  
      <a wire:navigate href="{{ route('getstarted') }}">
        <x-button size="small" class="hover:rotate-2 hover:scale-110 bg-[#000034]">
          Get Started
        </x-button>
      </a>
  
      <!-- GitHub -->
      <a href="https://github.com/your-repo" target="_blank"
         class="flex items-center space-x-2 mb-2 p-1 rounded-full hover:bg-white transition-transform duration-300 hover:rotate-3 hover:scale-110">
        <img src="{{ asset('image/github-removebg-preview.png') }}" alt="GitHub Logo" class="w-8 h-8 shrink-0">
      </a>
    </div>
  </nav>
  
  

  
<div class="flex min-h-screen w-full bg-blue-50 overflow-y-auto scrollbar-invisible">
  @livewire('leftpanel')
  @livewire('maincontent')
  

  <!-- Right Side (Others Panel) -->
  @livewire('rightpanel')

</div>
</div>