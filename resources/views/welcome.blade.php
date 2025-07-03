<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="image" type="image/png" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}">
    <title>KodigoUI</title>

    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap"
      rel="stylesheet"
    />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      .kodigo-text {
        font-size: 52px;
        line-height: 1.24;
        font-weight: 800;
        letter-spacing: 0em;
        font-family: 'Poppins', sans-serif;
        color: #e0f2fe;
        text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.5);
      }

      .kodigo-description {
        font-size: 18px;
        line-height: 1.6; /* more readable spacing */
        font-weight: 400;  /* normal weight */
        letter-spacing: normal; /* default spacing */
        font-family: 'Poppins', sans-serif;
        color: #dbeafe;
        max-width: 700px;
        margin-top: 20px;
        text-align: center;
        text-transform: none; /* removes uppercase if applied before */
        }


      .feature-tag {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 6px 12px;
        border-radius: 9999px;
        margin: 5px;
        font-size: 14px;
        color: #bfdbfe;
      }
    </style>

<script>
  function balloonBackground() {
    return {
      balloons: [],
      startBalloons() {
        setInterval(() => {
          this.launchBalloon();
        }, 700);
      },
      launchBalloon() {
        const size = Math.random() * 30 + 20;
        const left = Math.random() * 100;
        const duration = Math.random() * 6 + 4; // 4s to 10s

        const balloon = {
          visible: true,
          style: `
            width: ${size}px;
            height: ${size}px;
            left: ${left}%;
            bottom: -60px;
            --duration: ${duration}s;
          `
        };

        this.balloons.push(balloon);

        setTimeout(() => {
          balloon.visible = false;
        }, duration * 1000);
      }
    };
  }
</script>
<style>
  @keyframes floatToCenterThenPop {
    0% {
      transform: translateY(0) scale(1);
      opacity: 0.2;
    }
    70% {
      transform: translateY(-50vh) scale(1.05);
      opacity: 1;
    }
    100% {
      transform: translateY(-50vh) scale(2);
      opacity: 0;
    }
  }

  .animate-float-pop {
    animation: floatToCenterThenPop var(--duration, 6s) ease-in-out forwards;
  }

  @keyframes shimmer {
      0% {
        background-position: -200% 0;
      }
      100% {
        background-position: 200% 0;
      }
    }
  
    .shimmer-text {
      background-size: 200% auto;
      animation: shimmer 2s linear infinite;
    }
</style>



  </head>

  <body 
  x-data="balloonBackground()" 
  x-init="startBalloons()" 
  class="relative overflow-hidden w-full h-screen bg-gradient-to-br from-gray-900 via-indigo-800 to-blue-600 flex items-center justify-center"
>
  <!-- 🎈 Floating and Exploding Balloons -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <template x-for="(balloon, index) in balloons" :key="index">
      <div 
        x-show="balloon.visible"
        :style="balloon.style"
        class="absolute rounded-full bg-white bg-opacity-20 blur-sm animate-float-pop"
      ></div>
    </template>
  </div>
  
  <!-- 🚧 Development Notice (Dismissible with localStorage) -->
<div 
x-data="{
  showNotice: localStorage.getItem('kodigoNoticeClosed') !== 'true',
  closeNotice() {
    this.showNotice = false;
    localStorage.setItem('kodigoNoticeClosed', 'true');
  }
}" 
x-show="showNotice" 
x-transition 
class="w-full text-center py-3 bg-[#000034] text-white text-sm font-medium z-50 shadow-md fixed top-0 left-0"
>
<div class="flex items-center justify-center gap-2 px-4">
  <span>🚧 <strong>KodigoUI</strong> is currently in ongoing development. Installation is not yet available.</span>
  <button 
    @click="closeNotice" 
    class="ml-4 text-white bg-red-600 hover:bg-red-700 px-2 py-1 rounded text-xs"
  >
    Close
  </button>
</div>
</div>

<!-- 🚧 Development Notice (Dismissible - no localStorage) -->
<div 
  x-data="{ showNotice: true }" 
  x-transition 
  class="w-full text-center py-3 bg-[#000034] text-white text-sm font-medium z-50 shadow-md fixed top-0 left-0"
>
  <div class="flex items-center justify-center gap-2 px-4">
    <span>🚧 <strong>KodigoUI</strong> is currently in ongoing development. Installation is not yet available.</span>
  
  </div>
</div>

  @include('partials.nav')
  @include('partials.content')
</body>

</html>
