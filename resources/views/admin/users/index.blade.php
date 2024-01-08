<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <x-slot name="main">
        <section>
            {{ Breadcrumbs::render('users') }}
        </section>
        <x-card>
            <x-slot name="content">
                
                @livewire('admin.users')

                </x-slot>
            </x-card>
    </x-slot>
</x-app-layout>