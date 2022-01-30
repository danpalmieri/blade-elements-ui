@props([
    'closeEventName' => 'close-dropdown',
    'displayClasses' => 'inline-block',
    'id' => null,
    'openEventName' => 'open-dropdown',
    'position' => 'bottom-left',
    'trigger' => null,
])

<div
    x-data="{ open: false }"
    @if ($id)
        x-on:{{ $closeEventName }}.window="if ($event.detail.id === '{{ $id }}') open = false"
        x-on:{{ $openEventName }}.window="if ($event.detail.id === '{{ $id }}') open = true"
    @endif
    x-bind:aria-expanded="open"
    aria-haspopup="true"
    {{ $attributes->class(["relative {$displayClasses}"]) }}
>
    {{ $trigger }}

    <div
        x-show="open"
        x-on:click.away="open = false"
        x-transition:enter="transition"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        x-cloak
        role="menu"
        tabindex="-1"
        class="{{ generateClasses([
            'absolute z-10 mt-2 shadow-xl rounded-xl overflow-hidden w-52 focus:outline-none',
            'top-full' => $position === 'bottom-left',
            'left-0' => str_ends_with($position, 'left'),
            'bottom-full' => str_starts_with($position, 'top'),
            'right-0' => str_ends_with($position, 'right'),
            'top-auto' => $position === 'bottom-right',
        ]) }}"
    >
        <ul class="py-1 space-y-1 bg-white shadow rounded-xl">
            {{ $slot }}
        </ul>
    </div>
</div>