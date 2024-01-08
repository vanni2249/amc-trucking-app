<x-app-layout>
    @slot('header')
        <x-h2>
            {{ __('Trucks') }}
        </x-h2>
        @livewire('admin.truck-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('trucks') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.trucks')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>