<x-app-layout>
    @slot('header')
        <x-h2>Insurance companies</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.insurance-company-create', ['insurance' => $insurance], key($insurance->id))
            @include('admin.insurances.dropdown')
        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('insurance.companies',$insurance) }}
        <x-card>
            @slot('content')
                @livewire('admin.insurance-companies', ['insurance' => $insurance])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
