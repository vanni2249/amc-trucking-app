<x-app-layout>
    @slot('header')
        <x-h2>{{__('Vehicles')}}</x-h2>
        @livewire('admin.vehicle-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('vehicles') }}
        <x-card>
            @slot('content')
                @livewire('admin.vehicles')
            @endslot
        </x-card>
    @endslot
</x-app-layout>