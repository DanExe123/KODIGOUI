@props([
    'color' => 'default',  // Accepts: default, leading, trailing, white, white-leading, or custom Tailwind classes
    'size' => 'large',     // Accepts: large, regular, small
    'type' => 'submit'
])

@php
    $baseClasses = 'inline-flex items-center justify-center text-center gap-2 rounded-lg border-white outline-none transition duration-200 ease-in-out focus:ring-4 focus:ring-offset-2 focus:ring-offset-white disabled:bg-gray-300';

    $sizes = [
        'large' => match($color) {
            'leading' => 'w-[218px] h-[64px] text-button-lg px-6 py-5 leading-tight whitespace-nowrap gap-[12px]',
            default => 'w-[186px] h-[64px] text-button-lg px-6 py-5 leading-tight whitespace-nowrap',
        },
        'regular' => match($color) {
            'leading' => 'w-[150px] h-[44px] text-button-default px-[18px] py-3.5 gap-2 leading-[1.25rem] whitespace-nowrap',
            default => 'w-[128px] h-[44px] text-button-default px-[18px] py-3.5 leading-tight whitespace-nowrap',
        },
        'small' => match($color) {
            'leading' => 'w-[120px] h-[34px] text-button-s px-3 py-2.5 gap-2 leading-tight whitespace-nowrap',
            default => 'w-[104px] h-[34px] text-button-s px-3 py-2.5 leading-tight whitespace-nowrap',
        },
    ];

    $colorClasses = [
        'information' => 'bg-[#3B82F6] hover:opacity-90 text-white hover:text-black',
        'orange' => 'bg-[#FC5F02] hover:opacity-90 text-white hover:text-black',
        'blue' => 'bg-[#0473FF] hover:opacity-90 text-white hover:text-black',
        'success' => 'bg-[#10B981] hover:bg-[#D1FAE5] hover:text-black text-white',
        'warning' => 'bg-[#F59E0B] hover:opacity-90 text-white hover:text-black',
        'error' => 'bg-[#EF4444] hover:opacity-90 text-white hover:text-black',
        'gray' => 'bg-[#6B7280] hover:opacity-90 text-white hover:text-black',
        'green' => 'bg-[#02BF60] hover:opacity-90 text-white hover:text-black',
        'gunmetal' => 'bg-[#212529] hover:opacity-90 text-white hover:text-black',
       // 'darkblue' => 'bg-[#000034] hover:opacity-90 text-white hover:text-black',
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
        'stone' => 'bg-[#78716C] hover:opacity-90 text-white hover:text-black',
        'zinc' => 'bg-[#71717A] hover:opacity-90 text-white hover:text-black',
        'sky' => 'bg-[#0EA5E9] hover:opacity-90 text-white hover:text-black',
        'lightblue' => 'bg-[#60A5FA] hover:opacity-90 text-white hover:text-black',
        'red' => 'bg-[#DC2626] hover:opacity-90 text-white hover:text-black',
        'bluegray' => 'bg-[#64748B] hover:opacity-90 text-white hover:text-black',
        'deepblue' => 'bg-[#1E3A8A] hover:opacity-90 text-white hover:text-black',
        'lightgreen' => 'bg-[#4ADE80] hover:opacity-90 text-white hover:text-black',
        'emerald' => 'bg-[#059669] hover:opacity-90 text-white hover:text-black',
        'primary' => 'bg-[#3B82F6] hover:opacity-90 text-white hover:text-black',
        'secondary' => 'bg-[#64748B] hover:opacity-90 text-white hover:text-black',
        'accent' => 'bg-[#D946EF] hover:opacity-90 text-white hover:text-black',
        'muted' => 'bg-[#E5E7EB] hover:opacity-90 text-black',
        'steel' => 'bg-[#6C757D] hover:opacity-90 text-white hover:text-black',
        'crimson' => 'bg-[#DC143C] hover:opacity-90 text-white hover:text-black',
        'carrot' => 'bg-[#ED9121] hover:opacity-90 text-white hover:text-black',
        'aqua' => 'bg-[#00FFFF] hover:opacity-90 text-black',
        'salmon' => 'bg-[#FA8072] hover:opacity-90 text-white hover:text-black',
        'lightgray' => 'bg-[#D1D5DB] hover:opacity-90 text-black',
        'charcoal' => 'bg-[#36454F] hover:opacity-90 text-white hover:text-black',
    ];

    // Fallback if custom color name is used
    $colorClass = $colorClasses[$color] ?? "$color hover:opacity-90 text-white";

    $buttonClass = $baseClasses . ' ' . ($sizes[$size] ?? $sizes['large']) . ' ' . $colorClass;
@endphp


<button 
    {{ $attributes->merge(['type' => $type, 'class' => $buttonClass]) }} 
    onmouseup="this.blur()"
>
    {{ $slot }}
</button>
