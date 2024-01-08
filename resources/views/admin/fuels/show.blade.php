<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Fuel') }}</x-h2>
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('fuels', $fuel) }}
        <x-card>
            @slot('header')
                <x-h3>{{ __('Info') }}</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.fuel-update', ['fuel' => $fuel], key($fuel->id))
                    @livewire('admin.fuel-delete', ['fuel' => $fuel], key($fuel->id))
                </div>
            @endslot
            @slot('content')
                @livewire('admin.fuel-read', ['fuel' => $fuel])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
