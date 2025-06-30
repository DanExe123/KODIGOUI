@props(['active'])

@php
$classes = ($active ?? false)
    ? 'flex items-center gap-[8px] w-full h-[46px] rounded-[4px] px-[16px] py-[8px] text-body font-bold leading-5 text-gray-600 bg-[#9999AE] transition duration-150 ease-in-out sidelink'
    : 'flex items-center gap-[8px] w-full h-[46px] rounded-[4px] px-[16px] py-[8px] text-body font-bold leading-5 text-gray-600 hover:bg-[#9999AE] hover:text-gray-600 transition duration-150 ease-in-out sidelinks';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>