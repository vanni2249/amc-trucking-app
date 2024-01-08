<x-app-layout>
    <x-slot name="header">
        <x-h2>
            {{ __('Truck') }}
        </x-h2>
    </x-slot>
    <x-slot name="main">
        {{ Breadcrumbs::render('truck', $truck) }}
        <x-card>
            @slot('header')
                <x-h3>
                    {{__('Info')}}
                </x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.truck-update', ['truck' => $truck], key($truck->id))
                    @livewire('admin.truck-delete', ['truck' => $truck], key($truck->id))
                </div>
            @endslot
            @slot('content')
                @livewire('admin.truck-read',['truck' => $truck])
            @endslot
        </x-card>
    </x-slot>
</x-app-layout>