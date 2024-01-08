<x-app-layout>
    @slot('header')
        <x-h2>Gps company deductions</x-h2>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('gps.companies.company.deductions',$gps,$company) }}
        <x-card>
            @slot('content')
                @livewire('admin.gps-company-deductions',['gps' => $gps,'company' => $company])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
