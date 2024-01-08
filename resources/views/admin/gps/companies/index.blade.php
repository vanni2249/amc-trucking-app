<x-app-layout>
    @slot('header')
        <x-h2>Gps companies</x-h2>
        @livewire('admin.gps-company-create',['gps' => $gps])
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('gps.companies',$gps) }}
        <x-card>
            @slot('content')
                @livewire('admin.gps-companies',['gps' => $gps])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
