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
    Alerts Section
  </h1>
  
  <!-- Description -->
<p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-500 mb-6 max-w-2xl">
  KodigoUI provides a collection of alert components designed to deliver feedback clearly and consistently across your application. Whether you're notifying users of a successful action, warning them of potential issues, or displaying errors, these alerts are crafted for flexibility and clarity.
  <br><br>
  Built with the <strong>TALL Stack</strong> (TailwindCSS, Alpine.js, Laravel, and Livewire), the alert components are reactive, responsive, and accessible by default. You can easily bind them to Livewire events or Laravel session flashes for seamless real-time messaging.
  <br><br>
  Alerts are styled to support multiple types — such as success, warning, error, and failed — with distinct colors and icons using Font Awesome for instant visual recognition. Customize the text, appearance, and behavior to fit any UI scenario.
</p>

<!-- Alert Benefit Description -->
<div class="bg-white border-l-4 border-[#00001A] p-4 rounded-md shadow-sm text-gray-600 text-[15px] font-[Poppins] leading-relaxed max-w-full">
  <strong class="text-blue-600">Why Use KodigoUI Alert Components?</strong><br>
  KodigoUI alert components are more than just notification boxes — they are dynamic, accessible, and built for real-world Laravel projects. Here’s what sets them apart:
  <ul class="list-disc pl-5 mt-2 space-y-1">
    <li><strong>Multiple Alert Types:</strong> Built-in support for success, error, warning, and failed messages with unique styling and icons for each.</li>
    <li><strong>Livewire-Compatible:</strong> Easily display alerts using Livewire events, state bindings, or Laravel session flashes.</li>
    <li><strong>Responsive & Accessible:</strong> Mobile-friendly layout with semantic roles and keyboard navigation compatibility.</li>
    <li><strong>Font Awesome Icons:</strong> Uses modern icons for better UX and faster recognition of message intent.</li>
    <li><strong>Easy Customization:</strong> Adjust colors, size, animation, and content using Tailwind utility classes.</li>
  </ul>
</div>

  
          
          
           <!-- Installation Section -->
  <div class="space-y-4 mt-6"> 
    <h2 class="text-lg font-semibold text-gray-700">Alert Components</h2>

    <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
      KodigoUI’s alert components provide a simple and effective way to deliver user feedback across your application. Designed with accessibility and clarity in mind, each alert is

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
                    <div class="mt-6 flex flex-col gap-2">
                        <x-alert type="success" title="Success!" message="Your action was completed successfully." />
                        <x-alert type="warning" title="Warning!" message="Please double-check your inputs." />
                        <x-alert type="error" title="Error!" message="Something went wrong." />
                        <x-alert type="failed" title="Failed!" message="The operation could not be completed." />                        
                    </div>
                
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
                    <pre class="bg-[#000034] text-sm p-4 rounded-lg  text-white">
                <code class="block whitespace-pre leading-relaxed">
                    <span class="text-[#10B981]">&lt;x-alert</span> 
                        <span class="text-white">type=</span><span class="text-[#60a5fa]">"success"</span> 
                        <span class="text-white">title=</span><span class="text-[#60a5fa]">"Success!"</span> 
                        <span class="text-white">message=</span><span class="text-[#60a5fa]">"Your action was completed successfully."</span>
                    <span class="text-[#10B981]">/&gt;</span>
                
                    <span class="text-[#10B981]">&lt;x-alert</span> 
                        <span class="text-white">type=</span><span class="text-[#60a5fa]">"warning"</span> 
                        <span class="text-white">title=</span><span class="text-[#60a5fa]">"Warning!"</span> 
                        <span class="text-white">message=</span><span class="text-[#60a5fa]">"Please double-check your inputs."</span>
                    <span class="text-[#10B981]">/&gt;</span>
                
                    <span class="text-[#10B981]">&lt;x-alert</span> 
                        <span class="text-white">type=</span><span class="text-[#60a5fa]">"error"</span> 
                        <span class="text-white">title=</span><span class="text-[#60a5fa]">"Error!"</span> 
                        <span class="text-white">message=</span><span class="text-[#60a5fa]">"Something went wrong."</span>
                    <span class="text-[#10B981]">/&gt;</span>
                
                    <span class="text-[#10B981]">&lt;x-alert</span> 
                        <span class="text-white">type=</span><span class="text-[#60a5fa]">"failed"</span> 
                        <span class="text-white">title=</span><span class="text-[#60a5fa]">"Failed!"</span> 
                        <span class="text-white">message=</span><span class="text-[#60a5fa]">"The operation could not be completed."</span>
                    <span class="text-[#10B981]">/&gt;</span>
                </code>
                    </pre>
                </div>
                
                </div>
                
          
                <div class="p-4 border rounded-lg shadow-sm bg-green-50">
                  <h2 class="text-lg font-semibold text-gray-700">Livewire Integration</h2>
                
                  <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-1">
                    All components in KodigoUI are Livewire-friendly and support dynamic updates out of the box. They’re crafted to handle reactive data with ease and enhance your Laravel projects instantly.
                    <br><br>
                    For alert components, you can trigger notifications using Livewire events or by checking Laravel session flashes after actions like form submissions or deletes. Simply pass the alert type, title, and message as props:
                  </p>
                
                  <pre class="mt-4 bg-[#000034] text-sm rounded-lg p-4 overflow-auto text-white leading-relaxed">
                    <code>
                      <span class="text-[#10B981]">&lt;x-alert</span> 
                          <span class="text-white">type=</span><span class="text-[#60a5fa]">"success"</span> 
                          <span class="text-white">title=</span><span class="text-[#60a5fa]">"Success!"</span> 
                          <span class="text-white">message=</span><span class="text-[#60a5fa]">"Data has been updated successfully."</span> 
                      <span class="text-[#10B981]">/&gt;</span>
                    </code>
                      </pre>
                
                  <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-3">
                    You can also show alerts dynamically after a Livewire action using session flashes in your component:
                  </p>
                
                   <!-- Highlighted PHP Example -->
              <pre class="mt-2 bg-[#000034] text-sm rounded-lg p-4 overflow-auto text-white leading-relaxed">
                <code>
                  <span class="text-[#facc15]">public function</span> <span class="text-[#38bdf8]">update</span>() 
                  {
                      <span class="text-gray-400">// Your update logic...</span>
                      <span class="text-[#f472b6]">session</span>()-&gt;<span class="text-[#f472b6]">flash</span>(
                          <span class="text-[#60a5fa]">'success'</span>, 
                          <span class="text-[#60a5fa]">'Data has been updated successfully.'</span>
                      );
                  }
                </code>
                  </pre>
                
                  <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-3">
                    Then, in your Blade view, display the alert using a conditional:
                  </p>
            
                </div>
                
            </div>
          </main>
         @livewire('footer')
    </div>

    
    @livewire('rightpanel')
  
  </div>
  </div>