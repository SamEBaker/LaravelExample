@props(['active' => false])

@php
$classes = $active
    ? 'bg-orange-500 text-black px-3 py-2 rounded-md text-sm font-semibold'
    : 'text-white hover:bg-orange-500 hover:text-black px-3 py-2 rounded-md text-sm font-medium transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
