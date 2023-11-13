@props(['cortexto', 'corbg'])

@php
    $cortexto = match ($cortexto) {
        'cinza' => 'text-gray-800',
        'azul' => 'text-blue-800',
        'vermelho' => 'text-red-800',
        'amarelo' => 'text-yellow-500',
        'rosa' => 'text-pink-800',
        'indigo' => 'text-indigo-800',
        'roxo' => 'text-purple-800',
        'verde' => 'text-green-800',
        'lime' => 'text-lime-800',
        default => 'text-gray-800',
    };

    $corbg = match ($corbg) {
        'cinza' => 'bg-gray-100',
        'azul' => 'bg-blue-100',
        'vermelho' => 'bg-red-100',
        'amarelo' => 'bg-yellow-100',
        'rosa' => 'bg-pink-100',
        'indigo' => 'bg-indigo-100',
        'roxo' => 'bg-purple-100',
        'verde' => 'bg-green-100',
        'lime' => 'bg-lime-100',
        default => 'bg-gray-100',
    };
@endphp

<button {{ $attributes }} class="{{ $cortexto }} {{ $corbg }} rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>
