@props([
    'active' => false,
    'icon' => null,
])

<a {{ $attributes->class([
    'flex items-center justify-center w-10 h-10 rounded-lg focus:outline-none',
    'text-gray-500 transition hover:bg-gray-500/5 focus:bg-primary-500/10 focus:text-primary-600' => ! $active,
    'text-primary-600 bg-primary-100' => $active,
]) }}>
    <x-dynamic-component :component="$icon" class="w-9 h-9" />
</a>
