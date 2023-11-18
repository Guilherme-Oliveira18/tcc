@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'text-cyan-950 border-b sm:py-3.5 border-gray-100 hover:bg-red-800 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-2 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700'
            : 'text-white border-b sm:py-3.5 border-gray-100 hover:bg-red-800 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-2 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700'
@endphp

<a {{$navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
