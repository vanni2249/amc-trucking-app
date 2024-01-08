<x-app-layout>
    @slot('header')
        <x-h2>Gps</x-h2>
        <div class="space-x-1">
            @livewire('admin.gps-create')
        </div>
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('gps') }}
        <x-card>
            @slot('content')
                @livewire('admin.gps')
            @endslot
        </x-card>
    @endslot
</x-app-layout>
