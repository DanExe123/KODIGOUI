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
    
    
  
    
  <div class="flex min-h-screen w-full bg-blue-50">
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
    Loading Section
  </h1>
  
  <!-- Description -->
  <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
    KodigoUI’s loading components provide a variety of animated indicators to enhance user experience during asynchronous actions such as data fetching, form submission, and state changes.
    <br><br>
    From subtle text loaders and spinning dots to progress bars, skeleton placeholders, and button-level loaders, each component is crafted to deliver real-time feedback in a visually engaging way. These loaders are built using Tailwind CSS utility classes, ensuring they’re lightweight, customizable, and consistent across your application.
    <br><br>
    All loading elements are <strong>Livewire-ready</strong>, meaning you can easily trigger them using directives like <code>wire:loading</code> or <code>wire:target</code>, giving you full control over when and where feedback appears—without writing extra JavaScript.
</p>
  
  
  
          
          
            <!-- Installation Section -->
            <div class="space-y-4 mt-6"> 
                <h2 class="text-lg font-semibold text-gray-700">Loading</h2>
                
                    <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
                        KodigoUI's input text component is designed to provide a clean, responsive, and developer-friendly form experience. It supports real-time data binding, built-in validation error display, and consistent styling across your app — making form creation faster and more intuitive.
                    </p>
                
                <div x-data="{ showCode: false }" class="p-4 border rounded-lg shadow-sm bg-[#000034] relative">
                 
                    <!-- Show Code Button -->
                    <button 
                        @click="showCode = !showCode" 
                        class="absolute top-4 right-4 text-sm text-blue-700 hover:text-blue-900 flex items-center gap-1"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4zm0 0a2 2 0 100 4H7a2 2 0 100-4z" />
                        </svg>
                        <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
                    </button>
                
                    <!-- Input Preview -->
                    <div class="mt-4 flex flex-col gap-2">
                        <x-loading type="spinner" />
                        <x-loading type="dots" />
                        <x-loading type="bars" />
                        <x-loading type="ring" />
                        <x-loading type="text" />
                        <x-loading type="line" />
                        <x-loading type="ping" />
                        <x-loading type="squares" />
                        <x-loading type="ellipsis" />
                        <x-loading type="pulse-ring" />
                        <x-loading type="bar-wave" />
                        <x-loading type="ball-rise" />
                        <x-loading type="grow-dot" />
                        <x-loading type="spin-dot" />
                        <x-loading type="double-bounce" />
                        <x-loading type="fade-bars" />
                        <x-loading type="inline-button" />


                        

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
                    <pre class="bg-[#000034] text-sm p-4 rounded overflow-auto">
                        <code class="block whitespace-pre font-mono leading-relaxed">
                        
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"spinner"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"dots"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"bars"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"ring"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"text"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"line"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"ping"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"squares"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"ellipsis"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"pulse-ring"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"bar-wave"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"ball-rise"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"grow-dot"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"spin-dot"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"double-bounce"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"fade-bars"</span> <span class="text-[#10B981]">/&gt;</span><br>
                        <span class="text-[#10B981]">&lt;x-loading</span> <span class="text-white">type=</span><span class="text-[#60a5fa]">"inline-button"</span> <span class="text-[#10B981]">/&gt;</span>
                        
                        </code>
                        </pre>
                        
                    </div>
                </div>
                
          
                <div class="p-4 border rounded-lg shadow-sm bg-green-50">
                    <h2 class="text-lg font-semibold text-blue-700">Livewire-Friendly Loading States</h2>
                
                    <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-1">
                        KodigoUI offers a diverse collection of loading animations—from spinners and dots to progress lines and skeletons—all designed to enhance user feedback during asynchronous operations.
                        <br><br>
                        These components are optimized for <strong>Livewire integration</strong>, making it easy to show visual loading indicators while waiting for data, processing forms, or toggling states. Whether you're fetching records, submitting inputs, or delaying a modal, KodigoUI’s loading components provide smooth visual cues that work seamlessly with Livewire’s reactivity.
                        <br><br>
                        Simply toggle visibility using Livewire directives like <code>wire:loading</code>, <code>wire:target</code>, or <code>wire:loading.delay</code> to bind loaders to specific actions or components.
                    </p>
                </div>
                
            </div>
          </main>
         @livewire('footer')
    </div>

    
    @livewire('rightpanel')
  
  </div>
  </div>