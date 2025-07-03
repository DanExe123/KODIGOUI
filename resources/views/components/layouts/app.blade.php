<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>KodigoUI</title>

    <link rel="icon" type="image/png" href="{{ asset('icon/avatar-people-user-profile-man-boy-cap-young-512.webp') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles

    <style>
      .worm-bar {
        width: 100px;
        height: 4px;
        background-color: #60a5fa;
        animation: worm-walk 1.5s ease-in-out infinite;
        border-radius: 9999px;
      }

      @keyframes worm-walk {
        0% { transform: scaleX(0.5); opacity: 0.2; }
        50% { transform: scaleX(1.2); opacity: 1; }
        100% { transform: scaleX(0.5); opacity: 0.2; }
      }
    </style>
  </head>
  <body class=" text-white w-full h-screen bg-gradient-to-br from-gray-900 via-indigo-800 to-blue-600">
    <div
      x-data="{ loading: true }"
      x-init="setTimeout(() => { loading = false }, 2000)"
    > 
      <!-- 🔄 Smooth Blurred Loading Overlay -->
      <div
        x-show="loading"
        x-transition.opacity.duration.700ms
    class="fixed inset-0 flex items-center justify-center bg-white bg-opacity-80 z-[9999]"
      >
        <div class="worm-bar"></div>
      </div>

      <!-- ✅ Page Content with Smooth Fade In -->
    
      <div
        x-show="!loading"
        x-transition:enter="transition-opacity duration-700 ease-out"
        x-transition:leave="transition-opacity duration-500 ease-in"
        class="transition-opacity duration-700 ease-in-out"
      >
      
        {{ $slot }}
      </div>
    </div>

    @livewireScripts
  </body>
</html>
