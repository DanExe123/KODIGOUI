@props(['size' => 'md'])

@php
    $sizeClass = match($size) {
        'sm' => 'max-w-sm',
        'md' => 'max-w-[50%]', 
        'lg' => 'max-w-[76%]',
        'xl' => 'max-w-[90%]',
        default => 'max-w-md',
    };
@endphp

<div class="bg-white rounded-xl shadow-lg w-full {{ $sizeClass }}">
    <div class="p-4">
        {{ $slot }}
    </div>
</div>
