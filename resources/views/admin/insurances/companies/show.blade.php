<x-app-layout>
    @slot('header')
        <x-h2>{{__('Insurance company')}}</x-h2>
        @include('admin.insurances.dropdown')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('insurance.companies.show',$insurance,$company) }}
        <x-card>
            @slot('header')
                <x-h3>{{__('Info')}}</x-h3>
                <div class="flex space-x-1">
                    <livewire:admin.insurance-company-update :$insurance :$company :key="$insurance->id">
                    <livewire:admin.insurance-company-delete :$insurance :$company :key="$insurance->id">
                </div>
            @endslot
            @slot('content')
                @livewire('admin.insurance-company-read',['insurance' => $insurance, 'company' => $company])
            @endslot
        </x-card>
        <x-card>
            @slot('header')
                <x-h3>{{__('Deductions')}}</x-h3>
                <div class="flex space-x-1">
                    {{-- @livewire('admin.insurance-company-create', ['insurance' => $insurance], key($insurance->id)) --}}
                </div>
            @endslot
            @slot('content')
                {{-- @livewire('admin.insurance-companies',['insurance' => $insurance]) --}}
            @endslot
        </x-card>
    @endslot
</x-app-layout>