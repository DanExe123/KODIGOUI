<div class="min-h-screen overflow-y-auto scrollbar-invisible">
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
        <h1 class="text-2xl font-extrabold mb-4 text-[#000034]" style="font-family: 'Arial Black', Arial, sans-serif;">
          Welcome to KodigoUI!
        </h1>
      
        <!-- Description -->
        <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-500 mb-6 max-w-2xl">
          KodigoUI is a ready-to-use UI component library designed to help students and developers build clean and efficient front-end interfaces faster. It provides a growing collection of reusable, customizable components to help you avoid repetitive code and focus more on functionality and experience.
          <br><br>
          Built using the <strong>TALL Stack</strong> (TailwindCSS, Alpine.js, Laravel, and Livewire), this UI kit is tailored for dynamic web applications. Whether you're just starting out or building production-ready systems, KodigoUI speeds up development without sacrificing flexibility.
          <br><br>
          Every component is designed to be modular and responsive — making it easy to adapt to any layout. You can use the components as they are or fully customize them to fit your project’s branding and logic.
        </p>
      
        <!-- Requirements Section -->
        <div class="p-4 border border-gray-300 rounded-lg shadow-sm bg-[#000034] mb-6">
          <h2 class="text-lg font-semibold text-gray-100 mb-2">🛠 Requirements</h2>
          <ul class="list-disc list-inside text-[16px] leading-[1.32] font-normal text-gray-100">
            <li>PHP 8.2 | 8.3 | 8.4</li>
            <li>Laravel 10.x | 11.x | 12.x</li>
            <li>Livewire 3</li>
            <li>Alpine.js 3.x</li>
            <li>TailwindCSS 3.x | 4.x</li>
          </ul>
        </div>
      
        <!-- Installation Section -->
        <div class="space-y-4">
          <div class="p-4 border rounded-lg shadow-sm bg-blue-50">
            <h2 class="text-lg font-semibold text-blue-700"> Installation</h2>
      
            <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
              1. Execute the following command to seamlessly integrate KodigoUI into your project:
            </p>
            <pre class="bg-[#000034] text-sm text-gray-100 p-3 rounded mt-2 overflow-auto"><code>composer require KodigoUI/KodigoUI</code></pre>
      
            <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-4">
              2. Insert the KodigoUI tag <strong>above</strong> the Alpine.js script tag in your page layout:
            </p>
            <pre class="bg-[#000034] text-sm text-gray-100 p-3 rounded mt-2 overflow-auto"><code>&lt;x-kodigo-ui /&gt;</code></pre>
            <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-4">
              3. Insert the KodigoUI tag <strong>above</strong> the Alpine.js script tag in your page layout:
            </p>
            <pre class="bg-[#000034] text-sm text-gray-100 p-3 rounded mt-2 overflow-auto"><code>&lt;x-kodigo-ui /&gt;</code></pre>
      
            <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-4">
              4. Insert the KodigoUI tag <strong>above</strong> the Alpine.js script tag in your page layout:
            </p>
            <pre class="bg-[#000034] text-sm text-gray-100 p-3 rounded mt-2 overflow-auto"><code>&lt;x-kodigo-ui /&gt;</code></pre>
      
            <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-4">
              5. Insert the KodigoUI tag <strong>above</strong> the Alpine.js script tag in your page layout:
            </p>
            <pre class="bg-[#000034] text-sm text-gray-100 p-3 rounded mt-2 overflow-auto"><code>&lt;x-kodigo-ui /&gt;</code></pre>
      
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
