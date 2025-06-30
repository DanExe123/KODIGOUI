@props([
    'type' => 'spinner', // spinner, dots, bars, ring, text, line, ping, squares, fa, skeleton
])

<div class="flex justify-center items-center py-4">
    @switch($type)

        @case('spinner')
            <div class="w-10 h-10 border-4 border-blue-400 border-dashed rounded-full animate-spin"></div>
            @break

        @case('dots')
            <div class="flex space-x-2">
                <div class="w-3 h-3 bg-blue-500 rounded-full animate-bounce"></div>
                <div class="w-3 h-3 bg-blue-500 rounded-full animate-bounce [animation-delay:200ms]"></div>
                <div class="w-3 h-3 bg-blue-500 rounded-full animate-bounce [animation-delay:400ms]"></div>
            </div>
            @break

        @case('bars')
            <div class="flex space-x-1">
                <div class="w-1.5 h-6 bg-blue-600 animate-pulse"></div>
                <div class="w-1.5 h-6 bg-blue-400 animate-pulse [animation-delay:150ms]"></div>
                <div class="w-1.5 h-6 bg-blue-300 animate-pulse [animation-delay:300ms]"></div>
            </div>
            @break

        @case('ring')
            <div class="w-12 h-12 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
            @break

        @case('text')
            <p class="text-blue-600 text-lg font-semibold animate-pulse">Loading...</p>
            @break

            @case('line')
            <div class="w-full max-w-md bg-gray-200 rounded-full h-2 overflow-hidden">
                <div 
                    class="bg-blue-600 h-2 rounded-full animate-[grow_2s_linear_forwards]"
                    style="width: 0%"
                ></div>
            </div>
        
            <style>
                @keyframes grow {
                    to { width: 100%; }
                }
            </style>
            @break
        
        @case('ping')
            <div class="relative w-10 h-10">
                <span class="absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75 animate-ping"></span>
                <span class="relative inline-flex rounded-full h-10 w-10 bg-blue-500"></span>
            </div>
            @break

        @case('squares')
            <div class="flex space-x-2">
                <div class="w-4 h-4 bg-blue-400 animate-ping"></div>
                <div class="w-4 h-4 bg-blue-400 animate-pulse"></div>
                <div class="w-4 h-4 bg-blue-400 animate-bounce"></div>
            </div>
            @break

            @case('fa')
            <i class="fas fa-spinner fa-spin text-blue-600 text-3xl"></i>
            @break
     
              {{-- 11. Ellipsis Text Loader --}}
        @case('ellipsis')
        <div x-data="{ dots: '' }" x-init="setInterval(() => {
            dots = dots.length >= 3 ? '' : dots + '.';
        }, 400)" class="text-blue-600 font-medium text-sm">
            Loading<span x-text="dots"></span>
        </div>
        @break

    {{-- 12. Pulse Ring Outlines --}}
    @case('pulse-ring')
        <div class="relative w-10 h-10">
            <div class="absolute w-full h-full rounded-full border-4 border-blue-500 animate-ping"></div>
            <div class="absolute w-full h-full rounded-full border-4 border-blue-300 animate-ping [animation-delay:400ms]"></div>
            <div class="relative w-10 h-10 bg-blue-500 rounded-full"></div>
        </div>
        @break

    {{-- 13. Spinner Bars Horizontal --}}
    @case('bar-wave')
        <div class="flex items-end space-x-1">
            @for ($i = 0; $i < 5; $i++)
                <div class="w-1.5 bg-blue-500 animate-bounce h-4" style="animation-delay: {{ $i * 150 }}ms"></div>
            @endfor
        </div>
        @break

    {{-- 14. Ball Rise Animation --}}
    @case('ball-rise')
        <div class="flex space-x-2">
            @for ($i = 0; $i < 3; $i++)
                <div class="w-4 h-4 bg-blue-500 rounded-full animate-bounce" style="animation-delay: {{ $i * 200 }}ms"></div>
            @endfor
        </div>
        @break

    {{-- 15. Growing Dot Loader --}}
    @case('grow-dot')
        <div class="w-4 h-4 bg-blue-500 rounded-full animate-ping"></div>
        @break

    {{-- 16. Shimmer Block --}}
    @case('shimmer')
        <div class="w-48 h-4 bg-gray-300 rounded-md relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/50 to-transparent animate-shimmer"></div>
        </div>
        <style>
            @keyframes shimmer {
                100% { transform: translateX(100%); }
            }
            .animate-shimmer {
                animation: shimmer 1.5s infinite linear;
                background-size: 200% 100%;
            }
        </style>
        @break

    {{-- 17. Spin Circle Dot --}}
    @case('spin-dot')
        <div class="w-8 h-8 border-t-4 border-blue-500 border-solid rounded-full animate-spin"></div>
        @break

    {{-- 18. Double Bounce --}}
    @case('double-bounce')
        <div class="relative w-10 h-10">
            <div class="absolute w-full h-full border-4 border-blue-400 rounded-full animate-ping"></div>
            <div class="absolute w-full h-full border-4 border-blue-600 rounded-full animate-ping [animation-delay:200ms]"></div>
        </div>
        @break

    {{-- 19. Fade Bars --}}
    @case('fade-bars')
        <div class="flex space-x-1">
            @foreach (range(1,5) as $i)
                <div class="w-2 h-6 bg-blue-500 animate-pulse" style="animation-delay: {{ $i * 150 }}ms"></div>
            @endforeach
        </div>
        @break

    {{-- 20. Inline Loading Button --}}
    @case('inline-button')
    <div class="relative inline-block w-full max-w-xs overflow-hidden rounded">
        <!-- Animated background that fills inside the button -->
        <div class="absolute inset-0 bg-blue-600 z-0 animate-[grow_5s_linear_forwards]"></div>

        <!-- Button content -->
        <button class="relative z-10 flex items-center justify-center w-full px-4 py-2 text-white font-medium">
       
            Loading
        </button>
    </div>

    <style>
        @keyframes grow {
            from { width: 0%; }
            to { width: 100%; }
        }
        .animate-\[grow_5s_linear_forwards\] {
            animation: grow 5s linear forwards;
        }
    </style>
    @break


        @default
            <p class="text-gray-500">Unknown loading type.</p>

    @endswitch
</div>
