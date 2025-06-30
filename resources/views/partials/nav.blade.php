<nav class="absolute top-0 right-0 w-full px-6 py-4 bg-transparent flex justify-end items-center space-x-6 ">
    <x-button size="small" class="!w-[130px] hover:rotate-1 hover:scale-110"
    @mouseenter="$el.classList.add('animate-pulse')"
    @mouseleave="$el.classList.remove('animate-pulse')"
    >Documentation</x-button>
    <a wire:navigate href="{{ route('getstarted') }}">
      <x-button size="small" class="hover:rotate-2 hover:scale-110"
        @mouseenter="$el.classList.add('animate-pulse')"
        @mouseleave="$el.classList.remove('animate-pulse')"
      >
        Get Started
      </x-button>
    </a>    
  
    <a href="https://github.com/your-repo" target="_blank" class="flex transition transform duration-300 items-center space-x-2 hover:rotate-3 hover:scale-110 hover:bg-white mb-2 rounded-full"
    @mouseenter="$el.classList.add('animate-pulse')"
    @mouseleave="$el.classList.remove('animate-pulse')">
      <img src="image/github-removebg-preview.png" alt="GitHub Logo" class="w-8 h-8 flex shrink-0">
    </a>
    
  </nav>
  