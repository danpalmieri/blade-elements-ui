@props([
    'columns' => '3',
])

@php
    $columns = (int) $columns;
@endphp

<div {{ $attributes->class([
    'grid gap-6',
    'md:grid-cols-3' => $columns === 3,
    'md:grid-cols-1' => $columns === 1,
    'md:grid-cols-2' => $columns === 2,
    'md:grid-cols-4' => $columns === 4,
    'md:grid-cols-5' => $columns === 5,
]) }}>
    {{ $slot }}
</div>