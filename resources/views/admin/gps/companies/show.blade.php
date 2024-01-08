
<x-app-layout>
    @slot('header')
        <x-h2>Gps company</x-h2>
        @include('admin.gps.companies.dropdown')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('gps.companies.company',$gps,$company) }}
        <x-card>
            @slot('header')
                <x-h3>Info</x-h3>
            @endslot
            @slot('content')
                @livewire('admin.gps-company-read',['gps' => $gps, 'company' => $company])
            @endslot
        </x-card>
    @endslot
</x-app-layout>