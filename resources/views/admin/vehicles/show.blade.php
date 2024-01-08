<x-app-layout>
    <x-slot name="header">
        <x-h2>
            {{ __('Vehicle') }}
        </x-h2>
    </x-slot>
    <x-slot name="main">
        {{ Breadcrumbs::render('vehicle', $vehicle) }}
        <x-card>
            @slot('header')
                <x-h3>
                    {{__('Info')}}
                </x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.vehicle-update', ['vehicle' => $vehicle], key($vehicle->id))
                    @livewire('admin.vehicle-delete', ['vehicle' => $vehicle], key($vehicle->id))
                </div>
            @endslot
            @slot('content')
                @livewire('admin.vehicle-read',['vehicle' => $vehicle])
            @endslot
        </x-card>
    </x-slot>
</x-app-layout>