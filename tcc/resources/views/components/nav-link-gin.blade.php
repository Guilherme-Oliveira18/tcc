@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'bg-red-200 inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50 dark:hover:bg-gray-800 group'
            : 'inline-flex flex-col items-center justify-center px-5 rounded-s-full hover:bg-gray-50 dark:hover:bg-gray-800 group'
@endphp

<a {{$navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
