@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center  hover:text-red-600  text-md text-red-500'
            : 'inline-flex items-center  hover:text-red-600  text-md text-gray-500';
@endphp

<a { {$navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
