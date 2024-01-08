<x-app-layout>
    @slot('header')
        <x-h2>Gps</x-h2>
        @include('admin.gps.dropdown')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('gpses', $gps) }}
        <x-card>
            @slot('header')
                <x-h3>Info</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.gps-update',['gps' => $gps])
                    @livewire('admin.gps-delete',['gps' => $gps])
                </div>
            @endslot
            @slot('content')
                @livewire('admin.gps-read',['gps' => $gps])
            @endslot
        </x-card>
    @endslot
</x-app-layout>