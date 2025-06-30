<div class="pt-20">
  
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
    
    
  
    
  <div class="flex h-screen w-full bg-blue-50">
    @livewire('leftpanel')
    
    <div class="h-screen overflow-y-auto scrollbar-invisible">
        <style>
            .scrollbar-invisible::-webkit-scrollbar {
              display: none;
            }
          
            .scrollbar-invisible {
              -ms-overflow-style: none;  /* IE and Edge */
              scrollbar-width: none;     /* Firefox */
            }
          </style>
        <main class="flex-1 p-8 bg-blue-50 font-[Poppins]">
           <!-- Title -->
<!-- Title -->
<h1 class="text-2xl font-extrabold mb-4 text-gray-700" style="font-family: 'Arial Black', Arial, sans-serif;">
    Links Section
  </h1>
  
  <!-- Description -->
  <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-500 mb-6 max-w-2xl">
    KodigoUI is a ready-to-use UI component library designed to help students and developers build clean and efficient front-end interfaces faster. It provides a growing collection of reusable, customizable components to help you avoid repetitive code and focus more on functionality and experience.
    <br><br>
    Built using the <strong>TALL Stack</strong> (TailwindCSS, Alpine.js, Laravel, and Livewire), this UI kit is tailored for dynamic web applications. Whether you're just starting out or building production-ready systems, KodigoUI speeds up development without sacrificing flexibility.
    <br><br>
    Every component is designed to be modular and responsive — making it easy to adapt to any layout. You can use the components as they are or fully customize them to fit your project’s branding and logic.
  </p>
  
 <!-- Links Benefit Description -->
<div class="bg-white border-l-4 border-[#00001A] p-4 rounded-md shadow-sm text-gray-600 text-[15px] font-[Poppins] leading-relaxed max-w-full">
    <strong class="text-blue-600">Why Use KodigoUI Link Components?</strong><br>
    KodigoUI’s <code class="bg-gray-100 px-1 rounded text-sm text-gray-800">&lt;x-links&gt;</code> component simplifies hyperlink usage across your app with predefined variants and customization options:
    
    <ul class="list-disc pl-5 mt-2 space-y-1">
      <li><strong>Multiple Variants:</strong> Choose from <span class="text-blue-600 font-medium">text</span>, <span class="text-green-600 font-medium">button</span>, and <span class="text-purple-600 font-medium">icon</span> styles to match your UI use case.</li>
      <li><strong>Tailwind-Driven Styling:</strong> Easily customize colors, sizes, hover effects, and transitions using utility classes.</li>
      <li><strong>Responsive & Interactive:</strong> Links support opening in new tabs, scaling on hover, and even icon/image embedding (like GitHub links).</li>
      <li><strong>Livewire Compatibility:</strong> All variants work seamlessly with Livewire, ensuring reactivity and SPA-like behavior.</li>
      <li><strong>Consistent Spacing:</strong> Button links and text links are visually aligned and flexible in layout grids or toolbars.</li>
    </ul>
  </div>
  
  
  
          
          
            <!-- Installation Section -->
            <div class="space-y-4"> 
                <h2 class="text-lg font-semibold text-gray-700 mt-5">Links</h2>
                
                <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
                    KodigoUI's links component is built to offer a flexible and consistent way to create hyperlinks, buttons, and icon-based navigation elements. It supports multiple variants like <strong>text</strong>, <strong>button</strong>, and <strong>icon</strong>, allowing developers to easily adapt links to various design and functional contexts — all while ensuring responsiveness, accessibility, and Livewire compatibility.
                </p>
                
                
                <div x-data="{ showCode: false }" class="p-4 border rounded-lg shadow-sm bg-[#000034] relative">
                 
                    <div x-data="{ showCode: false }" class="relative">

                        <!-- Show Code Button -->
                        <button 
                            @click="showCode = !showCode" 
                            class="absolute top-2 right-4 text-sm text-blue-700 hover:text-blue-900 flex items-center gap-1"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4zm0 0a2 2 0 100 4H7a2 2 0 100-4z" />
                            </svg>
                            <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
                        </button>
                    
                        <!-- Input Preview -->
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <x-links href="#" variant="text">View links</x-links>
                    
                            <x-links href="#" variant="button" color="success" size="sm" target="_blank">
                                View Links
                            </x-links>
                    
                            <x-links href="https://github.com/your-repo" variant="icon" target="_blank">
                                <img src="{{ asset('image/github-removebg-preview.png') }}" alt="GitHub Logo" class="w-8 h-8 shrink-0 bg-white rounded-full">
                            </x-links>
                        </div>
                    
                        <!-- Code Preview with transition -->
                        <div 
                            x-show="showCode"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2"
                            class="mt-4"
                        >
                        <pre class="bg-[#000034] text-sm text-gray-100 p-3 rounded overflow-auto">
                            <code class="block whitespace-pre">
                            <span class="text-[#10B981]">&lt;x-links</span> <span class="text-white">href=</span><span class="text-[#60a5fa]">"#"</span> <span class="text-white">variant=</span><span class="text-[#60a5fa]">"text"</span><span class="text-[#10B981]">&gt;</span>View links<span class="text-[#10B981]">&lt;/x-links&gt;</span>
                            
                            <span class="text-[#10B981]">&lt;x-links</span> <span class="text-white">href=</span><span class="text-[#60a5fa]">"#"</span> <span class="text-white">variant=</span><span class="text-[#60a5fa]">"button"</span> <span class="text-white">color=</span><span class="text-[#60a5fa]">"success"</span> <span class="text-white">size=</span><span class="text-[#c084fc]">"sm"</span> <span class="text-white">target=</span><span class="text-[#60a5fa]">"_blank"</span><span class="text-[#10B981]">&gt;</span>
                                View Links
                            <span class="text-[#10B981]">&lt;/x-links&gt;</span>
                            
                            <span class="text-[#10B981]">&lt;x-links</span> <span class="text-white">href=</span><span class="text-[#60a5fa]">"https://github.com/your-repo"</span> <span class="text-white">variant=</span><span class="text-[#60a5fa]">"icon"</span> <span class="text-white">target=</span><span class="text-[#60a5fa]">"_blank"</span><span class="text-[#10B981]">&gt;</span>
                                &lt;img src=<span class="text-[#60a5fa]">"{{ asset('image/github-removebg-preview.png') }}"</span> alt=<span class="text-[#60a5fa]">"GitHub Logo"</span> class=<span class="text-[#60a5fa]">"w-8 h-8 shrink-0 bg-white rounded-full"</span>&gt;
                            <span class="text-[#10B981]">&lt;/x-links&gt;</span>
                            </code>
                            </pre>
                            
                        </div>
                    </div>
                </div>                    
                
          
                <div class="p-4 border rounded-lg shadow-sm bg-green-50">
                    <h2 class="text-lg font-semibold text-blue-700">Links Component</h2>
                
                    <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-1">
                        The <code class="bg-gray-200 px-1 rounded text-sm text-gray-800">&lt;x-links&gt;</code> component in KodigoUI provides versatile link options including <span class="font-medium text-blue-600">text</span>, <span class="font-medium text-green-600">button</span>, and <span class="font-medium text-purple-600">icon</span> variants.
                        You can easily define the link size, color, target, and even include icons or images — all styled responsively and Livewire-friendly.
                    </p>
                </div>
                
            </div>
          </main>
         @livewire('footer')
    </div>

    
    @livewire('rightpanel')
  
  </div>
  </div>