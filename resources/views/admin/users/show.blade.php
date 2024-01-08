<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>
    <x-slot name="main">
        <section>
            {{ Breadcrumbs::render('user', $user) }}
        </section>
        <x-card>
            <x-slot name="content">
                @livewire('admin.user-read',['user' => $user])
            </x-slot>
        </x-card>
    </x-slot>       
</x-app-layout>