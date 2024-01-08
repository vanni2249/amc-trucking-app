<x-app-layout>
    @slot('header')
        <x-h2>{{__('Insurance')}}</x-h2>
        @include('admin.insurances.dropdown')
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('insurance', $insurance) }}
        <x-card>
            @slot('header')
                <x-h3>{{__('Info')}}</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.insurance-update', ['insurance' => $insurance], key($insurance->id))
                    @livewire('admin.insurance-delete', ['insurance' => $insurance], key($insurance->id))
                </div>
            @endslot
            @slot('content')
                @livewire('admin.insurance-read',['insurance' => $insurance])
            @endslot
        </x-card>
       
    @endslot
</x-app-layout>