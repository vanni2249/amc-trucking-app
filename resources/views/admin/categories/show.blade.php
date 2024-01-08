<x-app-layout>
    <x-slot name="header">
        <x-h2>
            {{ __('Category') }}
        </x-h2>
        @livewire('admin.sub-category-create',['category' => $category])
    </x-slot>
    <x-slot name="main">
        {{ Breadcrumbs::render('category', $category) }}
            <x-card>
                <x-slot name="content">
                    <ul class="flex justify-between items-center">
                        <li>
                            <b>
                                @livewire('admin.category-read',['category' => $category])
                            </b>
                        </li>
                        <li class="flex space-x-1">
                            @livewire('admin.category-update',['category' => $category], key($category->id))
                            @livewire('admin.category-delete',['category' => $category], key($category->id))
                        </li>
                    </ul>
                </x-slot>
            </x-card>
            <x-card>
                @slot('header')
                    <x-h3>Sub categories</x-h3>
                @endslot
                <x-slot name="content">
                    @livewire('admin.sub-categories',['category' => $category])
                </x-slot>
            </x-card>
    </x-slot>
</x-app-layout>