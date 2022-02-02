@props([
    'name',
    'description',
    'monthlyPrice',
    'annuallyPrice',
    'features' => null
])
<div class="border border-gray-200 bg-white rounded-lg shadow-sm divide-y divide-gray-200">
    <div class="p-6">
        <h2 class="text-lg leading-6 font-medium text-gray-900">{{ $name }}</h2>
        @if($description)
        <p class="mt-4 text-sm text-gray-500">{{ $description }}</p>
        @endif
        <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-900" x-text="show==='monthly' ? '{{ $monthlyPrice }}' : '{{ $annuallyPrice }}'"></span>
            <span class="text-base font-medium text-gray-500" _x-text="show==='monthly' ? '/mês' : '/ano'">/mês</span>
        </p>
        <div class="mt-8">
            <span x-show="show==='monthly'">
                {{ $monthly ?? '' }}
            </span>
            <span x-show="show==='annually'">
                <p class="uppercase border py-1 rounded-full mb-3 text-xs text-center text-gray-500">Pago anualmente</p>
                {{ $annually ?? '' }}
            </span>
        </div>
    </div>
    @if($features)
    <div class="pt-6 pb-8 px-6">
        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">O que está incluso:</h3>
        <ul role="list" class="mt-6 space-y-4">
            @foreach(collect($features) as $feature)
            <x-ui::pricing.plan-feature>{{ $feature }}</x-ui::pricing.plan-feature>
            @endforeach
        </ul>
    </div>
    @endif
</div>
