@props([
    'name',
    'description',
    'price',
    'period' => '/mês'
])
<div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
    <div class="p-6">
        <h2 class="text-lg leading-6 font-medium text-gray-900">{{ $name }}</h2>
        <p class="mt-4 text-sm text-gray-500">{{ $description }}</p>
        <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-900">{{ $price }}</span>
            <span class="text-base font-medium text-gray-500">{{ $period }}</span>
        </p>
        <div class="mt-5">
            {{ $cta ?? '' }}
        </div>
    </div>
    <div class="pt-6 pb-8 px-6">
        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">O que está incluso:</h3>
        <ul role="list" class="mt-6 space-y-4">
            {{ $slot }}
        </ul>
    </div>
</div>
