@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 hover:text-yellow-900 text-sm text-yellow-500'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent hover:text-yellow-900 text-sm text-yellow-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
