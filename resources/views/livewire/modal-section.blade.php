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
<h1 class="text-2xl font-extrabold mb-4 text-gray-700" style="font-family: 'Arial Black', Arial, sans-serif;">
    Modal Section
  </h1>
  
  <!-- Description -->
  <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-500 mb-6 max-w-2xl">
    KodigoUI is a ready-to-use UI component library designed to help students and developers build clean and efficient front-end interfaces faster. It provides a growing collection of reusable, customizable components to help you avoid repetitive code and focus more on functionality and experience.
    <br><br>
    Built using the <strong>TALL Stack</strong> (TailwindCSS, Alpine.js, Laravel, and Livewire), this UI kit is tailored for dynamic web applications. Whether you're just starting out or building production-ready systems, KodigoUI speeds up development without sacrificing flexibility.
    <br><br>
    Every component is designed to be modular and responsive — making it easy to adapt to any layout. You can use the components as they are or fully customize them to fit your project’s branding and logic.
  </p>
  
  <!-- Modal Benefit Description -->
  <div class="bg-white border-l-4 border-[#00001A] p-4 rounded-md shadow-sm text-gray-600 text-[15px] font-[Poppins] leading-relaxed max-w-full">
    <strong class="text-blue-600">Why Use Modals?</strong><br>
    Modals are an essential part of any modern user interface. They allow you to display important content, forms, or alerts without navigating away from the current page. Here are some key benefits and advantages:
    <ul class="list-disc pl-5 mt-2 space-y-1">
      <li><strong>Improved User Experience:</strong> Modals provide quick interactions without full-page reloads.</li>
      <li><strong>Focused Attention:</strong> They help highlight critical actions like confirmations, inputs, or warnings.</li>
      <li><strong>Seamless Integration:</strong> Easily combined with Livewire for real-time interactivity and validation.</li>
      <li><strong>Clean Design:</strong> Keep your interface uncluttered while still offering advanced functionality when needed.</li>
      <li><strong>Accessibility:</strong> Properly built modals enhance accessibility with keyboard and screen reader support.</li>
    </ul>
  </div>
  
          
          
            <!-- Modal Section -->
            <div class="space-y-4">
              <div class="p-4 border rounded-lg shadow-sm bg-blue-50">
                <h2 class="text-lg font-semibold text-gray-700"> Modal Size Small | Medium | Large </h2>
          
                <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
                  You can easily adjust the modal size using the <code>size</code> attribute in the <code>&lt;x-modal-card&gt;</code> component.
                  The available size options map to Tailwind’s <code>max-w-*</code> classes as follows:
                       </p>                   
                       <div x-data="{ showCode: false }" class="relative bg-[#000034] p-4 rounded-lg">

                        <!-- Show/Hide Code Button -->
                        <button 
                            @click="showCode = !showCode" 
                            class="absolute top-4 right-4 text-sm text-blue-300 hover:text-white flex items-center gap-1"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4zm0 0a2 2 0 100 4H7a2 2 0 100-4z" />
                            </svg>
                            <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
                        </button>
                    
                        <!-- Modal Buttons -->
                        <div class="flex flex-wrap gap-2">
                            <!-- Small Modal -->
                            <div x-data="{ showModalSm: false }">
                                <x-button @click="showModalSm = true" variant="default" size="small" color="success">Open Small</x-button>
                                <div
                                    x-show="showModalSm"
                                    @click.outside="showModalSm = false"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    x-cloak
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                >
                                    <x-modal-card size="sm">
                                        <div class="flex justify-end">
                                            <button @click="showModalSm = false" class="text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>
                                        </div>
                                        <hr>
                                        <p class="text-gray-700 text-sm mt-2 text-center">This is your <strong>small</strong> modal content.</p>
                                    </x-modal-card>
                                </div>
                            </div>
                    
                            <!-- Medium Modal -->
                            <div x-data="{ showModalMd: false }">
                                <x-button @click="showModalMd = true" variant="default" size="small" color="success">Open MD</x-button>
                                <div
                                    x-show="showModalMd"
                                    @click.outside="showModalMd = false"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    x-cloak
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                >
                                    <x-modal-card size="md">
                                        <div class="flex justify-end">
                                            <button @click="showModalMd = false" class="text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>
                                        </div>
                                        <hr>
                                        <p class="text-gray-700 text-sm mt-2 text-center">This is your <strong>medium</strong> modal content.</p>
                                    </x-modal-card>
                                </div>
                            </div>
                    
                            <!-- Large Modal -->
                            <div x-data="{ showModalLg: false }">
                                <x-button @click="showModalLg = true" variant="default" size="small" color="success">Open Large</x-button>
                                <div
                                    x-show="showModalLg"
                                    @click.outside="showModalLg = false"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    x-cloak
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                >
                                    <x-modal-card size="lg">
                                        <div class="flex justify-end">
                                            <button @click="showModalLg = false" class="text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>
                                        </div>
                                        <hr>
                                        <p class="text-gray-700 text-sm mt-2 text-center">This is your <strong>large</strong> modal content.</p>
                                    </x-modal-card>
                                </div>
                            </div>
                    
                            <!-- XLarge Modal -->
                            <div x-data="{ showModalXl: false }">
                                <x-button @click="showModalXl = true" variant="default" size="small" color="success">Open XLarge</x-button>
                                <div
                                    x-show="showModalXl"
                                    @click.outside="showModalXl = false"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    x-cloak
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                >
                                    <x-modal-card size="xl">
                                        <div class="flex justify-end">
                                            <button @click="showModalXl = false" class="text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>
                                        </div>
                                        <hr>
                                        <p class="text-gray-700 text-sm mt-2 text-center">This is your <strong>x-large</strong> modal content.</p>
                                    </x-modal-card>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Toggleable Code Block -->
                        <!-- Code Display -->
                        <pre x-show="showCode" x-transition 
                        class="bg-[#000034] text-white text-xs rounded mt-10 p-4 overflow-x-auto whitespace-pre text-left">
                      <code>
                        
                          // Small Modal  //
                          &lt;div x-data="{ showModalSm: false }"&gt;
                              &lt;x-button @click="showModalSm = true" variant="default" size="small"&gt;Open Small&lt;/x-button&gt;
                              &lt;div x-show="showModalSm" @click.outside="showModalSm = false"
                                  x-transition:enter="transition ease-out duration-300"
                                  x-transition:enter-start="opacity-0 scale-90"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  x-transition:leave="transition ease-in duration-200"
                                  x-transition:leave-start="opacity-100 scale-100"
                                  x-transition:leave-end="opacity-0 scale-90"
                                  x-cloak
                                  class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"&gt;
                                  &lt;x-modal-card size="sm"&gt;
                                      &lt;div class="flex justify-end"&gt;
                                          &lt;button @click="showModalSm = false" class="text-gray-500 hover:text-red-600 text-xl font-bold"&gt;&amp;times;&lt;/button&gt;
                                      &lt;/div&gt;
                                      &lt;hr&gt;
                                      &lt;p class="text-gray-700 text-sm mt-2 text-center"&gt;This is your &lt;strong&gt;small&lt;/strong&gt; modal content.&lt;/p&gt;
                                  &lt;/x-modal-card&gt;
                              &lt;/div&gt;
                          &lt;/div&gt;
                          
                          // Medium Modal //
                          &lt;div x-data="{ showModalMd: false }"&gt;
                              &lt;x-button @click="showModalMd = true" variant="default" size="small"&gt;Open MD&lt;/x-button&gt;
                              &lt;div x-show="showModalMd" @click.outside="showModalMd = false"
                                  x-transition:enter="transition ease-out duration-300"
                                  x-transition:enter-start="opacity-0 scale-90"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  x-transition:leave="transition ease-in duration-200"
                                  x-transition:leave-start="opacity-100 scale-100"
                                  x-transition:leave-end="opacity-0 scale-90"
                                  x-cloak
                                  class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"&gt;
                                  &lt;x-modal-card size="md"&gt;
                                      &lt;div class="flex justify-end"&gt;
                                          &lt;button @click="showModalMd = false" class="text-gray-500 hover:text-red-600 text-xl font-bold"&gt;&amp;times;&lt;/button&gt;
                                      &lt;/div&gt;
                                      &lt;hr&gt;
                                      &lt;p class="text-gray-700 text-sm mt-2 text-center"&gt;This is your &lt;strong&gt;medium&lt;/strong&gt; modal content.&lt;/p&gt;
                                  &lt;/x-modal-card&gt;
                              &lt;/div&gt;
                          &lt;/div&gt;
                          
                          // Large Modal //
                          &lt;div x-data="{ showModalLg: false }"&gt;
                              &lt;x-button @click="showModalLg = true" variant="default" size="small"&gt;Open Large&lt;/x-button&gt;
                              &lt;div x-show="showModalLg" @click.outside="showModalLg = false"
                                  x-transition:enter="transition ease-out duration-300"
                                  x-transition:enter-start="opacity-0 scale-90"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  x-transition:leave="transition ease-in duration-200"
                                  x-transition:leave-start="opacity-100 scale-100"
                                  x-transition:leave-end="opacity-0 scale-90"
                                  x-cloak
                                  class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"&gt;
                                  &lt;x-modal-card size="lg"&gt;
                                      &lt;div class="flex justify-end"&gt;
                                          &lt;button @click="showModalLg = false" class="text-gray-500 hover:text-red-600 text-xl font-bold"&gt;&amp;times;&lt;/button&gt;
                                      &lt;/div&gt;
                                      &lt;hr&gt;
                                      &lt;p class="text-gray-700 text-sm mt-2 text-center"&gt;This is your &lt;strong&gt;large&lt;/strong&gt; modal content.&lt;/p&gt;
                                  &lt;/x-modal-card&gt;
                              &lt;/div&gt;
                          &lt;/div&gt;
                          
                         // XLarge Modal //
                          &lt;div x-data="{ showModalXl: false }"&gt;
                          &lt;x-button @click="showModalXl = true" variant="default" size="small"&gt;Open XLarge&lt;/x-button&gt;
                          &lt;div x-show="showModalXl" @click.outside="showModalXl = false"
                              x-transition:enter="transition ease-out duration-300"
                              x-transition:enter-start="opacity-0 scale-90"
                              x-transition:enter-end="opacity-100 scale-100"
                              x-transition:leave="transition ease-in duration-200"
                              x-transition:leave-start="opacity-100 scale-100"
                              x-transition:leave-end="opacity-0 scale-90"
                              x-cloak
                              class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"&gt;
                              &lt;x-modal-card size="xl"&gt;
                                  &lt;div class="flex justify-end"&gt;
                                      &lt;button @click="showModalXl = false" class="text-gray-500 hover:text-red-600 text-xl font-bold"&gt;&amp;times;&lt;/button&gt;
                                  &lt;/div&gt;
                                  &lt;hr&gt;
                                  &lt;p class="text-gray-700 text-sm mt-2 text-center"&gt;
                                      This is your &lt;strong&gt;x-large&lt;/strong&gt; modal content.
                                  &lt;/p&gt;
                              &lt;/x-modal-card&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                          </code>
                    </pre>
                    </div>
                    
              </div>
          
              <div class="p-4 border rounded-lg shadow-sm bg-green-50">
                <h2 class="text-lg font-semibold text-blue-700"> Livewire Integration</h2>
          
                <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-1">
                  All components in KodigoUI are Livewire-friendly and support dynamic updates out of the box. They’re crafted to handle reactive data with ease and enhance your Laravel projects instantly.
                </p>
              </div>
            </div>
          </main>
         @livewire('footer')
    </div>

    
    @livewire('rightpanel')
  
  </div>
  </div>