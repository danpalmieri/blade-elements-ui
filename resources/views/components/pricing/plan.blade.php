@props([
    'name',
    'description',
    'priceMonthly',
    'priceAnnualy'
])
<div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
    <div class="p-6">
        <h2 class="text-lg leading-6 font-medium text-gray-900">{{ $name }}</h2>
        @if($description)
        <p class="mt-4 text-sm text-gray-500">{{ $description }}</p>
        @endif
        <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-900" x-text="show==='monthly' ? '{{ $priceMonthly }}' : '{{ $priceAnnually }}'"></span>
            <span class="text-base font-medium text-gray-500" x-text="show==='monthly' ? '/mês' : '/ano'"></span>
        </p>
        <div class="mt-8">
            <span x-show="'show'==='monthly'">
                {{ $ctaMonthly ?? '' }}
            </span>
            <span x-show="'show'==='annually'">
                {{ $ctaAnnually ?? '' }}
            </span>
        </div>
    </div>
    <div class="pt-6 pb-8 px-6">
        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">O que está incluso:</h3>
        <ul role="list" class="mt-6 space-y-4">
            {{ $slot }}
        </ul>
    </div>
</div>
