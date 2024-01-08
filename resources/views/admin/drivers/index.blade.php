<x-app-layout>
    @slot('header')
        <x-h2>{{__('Drivers')}}</x-h2>
        @livewire('admin.driver-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('drivers') }}
        <x-card>
            @slot('content')
                @livewire('admin.drivers')
            @endslot
        </x-card>
    @endslot
</x-app-layout>