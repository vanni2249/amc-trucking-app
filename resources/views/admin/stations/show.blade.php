<x-app-layout>
    @slot('header')
        <x-h2>Station</x-h2>
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('station', $station) }}
        <x-card>
            <x-slot name="header">
                <x-h3>Info</x-h3>
                <section class="flex space-x-1">
                    @livewire('admin.station-update', ['station' => $station], key($station->id))
                    @livewire('admin.station-delete', ['station' => $station], key($station->id))
                </section>
            </x-slot>
            <x-slot name="content">
                @livewire('admin.station-read',['station' => $station])
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>