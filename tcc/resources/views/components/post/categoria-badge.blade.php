@props(['categoria'])
<x-badge wire:navigate href="{{ route('blog.index', ['categoria' => $categoria->slug]) }}"
    :cortexto="$categoria->cor_texto" :corbg="$categoria->cor_bg">
    {{ $categoria->titulo }}
</x-badge>
