@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-300 focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-xs text-gray-800 placeholder:text-gray-400 rounded-md shadow-sm']) !!}>
