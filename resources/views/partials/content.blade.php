<div class="flex flex-col items-center justify-center text-center px-4">


<!-- Shining Text -->
<div class="p-2 text-[70px] font-extrabold text-transparent bg-clip-text 
            bg-gradient-to-r from-indigo-400 via-white to-indigo-400 shimmer-text font-['Arial_Black','Arial',sans-serif']">
  KodigoUI
</div>

  <!-- Description -->
  <p class="kodigo-description">
    A modern, student-friendly UI library designed to help you build beautiful and responsive interfaces with ease. 
    KodigoUI is optimized for learning and development using 
    <strong>TailwindCSS</strong>, <strong>Livewire</strong>, and <strong>Alpine.js</strong> — 
    so you can build fast, interactive components without the complexity.
  </p>

  <!-- TALL Stack Notice -->
  <div class="mt-4 text-sm text-[#dbeafe] px-4 py-2 rounded">
    <strong>This component is built with the TALL Stack</strong> — Tailwind CSS, Alpine.js, Laravel & Livewire. <br>
    It's optimized for reusability — just <strong>call the component once</strong> to save time and reduce code repetition.
  </div>

 <!-- Feature Tags -->
<div x-data class="flex flex-wrap justify-center mt-2 gap-2">

  <!-- TailwindCSS -->
  <span
    class="feature-tag flex items-center gap-2 transition transform duration-300 hover:rotate-3 hover:scale-110 hover:bg-violet-500 hover:text-white cursor-pointer"
    @mouseenter="$el.classList.add('animate-pulse')"
    @mouseleave="$el.classList.remove('animate-pulse')"
  >
    <img src="{{ asset('image/tailwind-removebg-preview.png') }}" alt="TailwindCSS" class="w-6 h-6" />
    TailwindCSS
  </span>

  <!-- Alpine.js -->
  <span
    class="feature-tag flex items-center gap-2 transition transform duration-300 hover:rotate-3 hover:scale-110 hover:bg-sky-600 hover:text-white cursor-pointer"
    @mouseenter="$el.classList.add('animate-pulse')"
    @mouseleave="$el.classList.remove('animate-pulse')"
  >
    <img src="{{ asset('image/alpinejs-removebg-preview.png') }}" alt="Alpine.js" class="w-6 h-6" />
    Alpine.js
  </span>

  <!-- Laravel -->
  <span
    class="feature-tag flex items-center gap-2 transition transform duration-300 hover:rotate-3 hover:scale-110 hover:bg-gray-700 hover:text-white cursor-pointer"
    @mouseenter="$el.classList.add('animate-pulse')"
    @mouseleave="$el.classList.remove('animate-pulse')"
  >
    <img src="{{ asset('image/laravel-removebg-preview.png') }}" alt="Laravel" class="w-6 h-6" />
    Laravel
  </span>

  <!-- Livewire -->
  <span
    class="feature-tag flex items-center gap-2 transition transform duration-300 hover:rotate-3 hover:scale-110 hover:bg-purple-600 hover:text-white cursor-pointer"
    @mouseenter="$el.classList.add('animate-pulse')"
    @mouseleave="$el.classList.remove('animate-pulse')"
  >
    <img src="{{ asset('image/livewire-removebg-preview.png') }}" alt="Livewire" class="w-6 h-6" />
    Livewire
  </span>

</div>


</div>
