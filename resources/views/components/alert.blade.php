@props([
    'type' => 'success', // success, warning, error, failed
    'message' => '',
    'title' => '',
])

@php
    $types = [
        'success' => [
            'bg' => 'bg-green-100',
            'text' => 'text-green-700',
            'icon' => 'fa-solid fa-circle-check',
        ],
        'warning' => [
            'bg' => 'bg-yellow-100',
            'text' => 'text-yellow-800',
            'icon' => 'fa-solid fa-triangle-exclamation',
        ],
        'error' => [
            'bg' => 'bg-red-100',
            'text' => 'text-red-700',
            'icon' => 'fa-solid fa-circle-xmark',
        ],
        'failed' => [
            'bg' => 'bg-gray-200',
            'text' => 'text-gray-800',
            'icon' => 'fa-solid fa-ban',
        ],
    ];

    $bgClass = $types[$type]['bg'] ?? $types['success']['bg'];
    $textClass = $types[$type]['text'] ?? $types['success']['text'];
    $iconClass = $types[$type]['icon'] ?? $types['success']['icon'];
@endphp

<div {{ $attributes->merge(['class' => "flex items-center p-4 mb-4 text-sm $textClass $bgClass rounded-lg"]) }} role="alert">
    <i class="mr-2 text-lg {{ $iconClass }}"></i>
    <span class="font-medium">{{ $title }}</span> {{ $message }}
</div>
