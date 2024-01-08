<x-app-layout>
    @slot('header')
        <x-h2>
            {{ __('Stations') }}
        </x-h2>
        @livewire('admin.station-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('stations') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.stations')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>