<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Fuels') }}</x-h2>
        @livewire('admin.fuel-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('fuel') }}
        <x-card>
            <x-slot name="content">
                <livewire:admin.fuels>
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>
