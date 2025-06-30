@props([
    'id' => null,         
    'disabled' => false,   
    'size' => 'long',     
    'variant' => null,     
])

@php
    // Determine the width based on the 'size' prop
    $widthClass = match($size) {
        'short' => 'w-[170px]',
        'standard' => 'w-[299px]',
        'long' => 'w-[434px]',
        default => 'w-[434px]',
    };

    $fieldName = $id;
    $isError = $fieldName && $errors->has($fieldName) || $variant === 'error';

    $baseClasses = implode(' ', [
        $widthClass,
        'h-[44px]',
        'border',
        'rounded-lg',
        'p-4 text-[14px] text-gray-500',
        $disabled ? 'bg-gray-200 cursor-not-allowed' : '',
        $isError
            ? 'border-[#EF4444] focus:border-[#EF4444] focus:ring-1 focus:ring-[#EF4444] focus:outline-none p-4 text-[14px]'
            : 'border-gray-100 hover:border-0473FF p-4 focus:border-0473FF focus:ring-1 focus:ring-0473FF focus:outline-none',
    ]);
@endphp

<div class="flex flex-col gap-1">
    <label class="relative {{ $widthClass }}">
        <input
            {{ $disabled ? 'disabled' : '' }}
            {!! $attributes->merge(['id' => $id, 'class' => $baseClasses]) !!}
        >
        @if ($isError)
        @endif
    </label>

    @if ($isError)
        <span class="text-[#EF4444] text-xs">{{ $errors->first($id) }}</span>
    @endif
</div>
