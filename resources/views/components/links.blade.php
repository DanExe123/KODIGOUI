@props([
    'href' => '#',
    'variant' => 'text', // button, text, icon
    'icon' => null,
    'size' => 'base', // sm, base, lg
    'color' => 'primary',
    'target' => null,
])

@php
    $sizes = [
        'sm' => 'text-sm px-3 py-1.5',
        'base' => 'text-base px-4 py-2',
        'lg' => 'text-lg px-5 py-3',
    ];

    $customColors = [
        'information' => 'bg-[#3B82F6] hover:opacity-90 text-white hover:text-black',
        'orange' => 'bg-[#FC5F02] hover:opacity-90 text-white hover:text-black',
        'blue' => 'bg-[#0473FF] hover:opacity-90 text-white hover:text-black',
        'success' => 'bg-[#10B981] hover:bg-[#D1FAE5] hover:text-black text-white',
        'warning' => 'bg-[#F59E0B] hover:opacity-90 text-white hover:text-black',
        'error' => 'bg-[#EF4444] hover:opacity-90 text-white hover:text-black',
        'gray' => 'bg-[#6B7280] hover:opacity-90 text-white hover:text-black',
        'green' => 'bg-[#02BF60] hover:opacity-90 text-white hover:text-black',
        'gunmetal' => 'bg-[#212529] hover:opacity-90 text-white hover:text-black',
        'yellow' => 'bg-[#F8AB11] hover:opacity-90 text-white hover:text-black',
        'teal' => 'bg-[#14B8A6] hover:opacity-90 text-white hover:text-black',
        'cyan' => 'bg-[#06B6D4] hover:opacity-90 text-white hover:text-black',
        'pink' => 'bg-[#EC4899] hover:opacity-90 text-white hover:text-black',
        'purple' => 'bg-[#8B5CF6] hover:opacity-90 text-white hover:text-black',
        'rose' => 'bg-[#F43F5E] hover:opacity-90 text-white hover:text-black',
        'lime' => 'bg-[#84CC16] hover:opacity-90 text-white hover:text-black',
        'indigo' => 'bg-[#6366F1] hover:opacity-90 text-white hover:text-black',
        'amber' => 'bg-[#F59E0B] hover:opacity-90 text-white hover:text-black',
        'neutral' => 'bg-[#9CA3AF] hover:opacity-90 text-white hover:text-black',
    ];

    $colorClass = $customColors[$color] ?? 'bg-blue-500 text-white hover:bg-blue-600';

    $buttonBase = 'inline-flex items-center justify-center text-center gap-2 rounded-lg border-white outline-none transition duration-200 ease-in-out focus:ring-4 focus:ring-offset-2 focus:ring-offset-white disabled:bg-gray-300';

    $buttonClass = "$buttonBase $colorClass {$sizes[$size]}";

    $iconLinkClass = 'flex items-center space-x-2 p-1 rounded-full hover:bg-white transition-transform duration-300 hover:rotate-3 hover:scale-110';
@endphp

@if ($variant === 'button')
    <a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => $buttonClass]) }}>
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@elseif ($variant === 'icon')
    <a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => $iconLinkClass]) }}>
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @else
            {{ $slot }}
        @endif
    </a>
@else
    <a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'hover:underline px-2 py-1 inline-block']) }}>
        {{ $slot }}
    </a>
@endif
