<x-app-layout>
    @slot('header')
    <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payrolls') }}
        </h2>
    </div>
    @endslot
    @slot('main')
        <x-card>
            <x-slot name="content">
                @livewire('client.payrolls')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>