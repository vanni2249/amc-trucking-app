<x-app-layout>
    <x-slot name="header">
            <x-h2>State</x-h2>
    </x-slot>
    <x-slot name="main">
        {{ Breadcrumbs::render('state', $state) }}
        <x-card>
            <x-slot name="header">
                <x-h3>Info</x-h3>
                <section class="flex space-x-1">
                    @livewire('admin.state-update', ['state' => $state], key($state->id))
                    @livewire('admin.state-delete', ['state' => $state], key($state->id))
                </section>
            </x-slot>
            <x-slot name="content">
                @livewire('admin.state-read',['state' => $state])
            </x-slot>
        </x-card>
    </x-slot>
</x-app-layout>