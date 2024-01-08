<x-app-layout>
    <x-slot name="header">
        <x-h2>
            {{ __('Categories') }}
        </x-h2>
        @livewire('admin.category-create')
    </x-slot>
    <x-slot name="main">
        {{ Breadcrumbs::render('categories') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.categories')
            </x-slot>
        </x-card>
    </x-slot>
</x-app-layout>