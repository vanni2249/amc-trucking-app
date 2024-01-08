<x-app-layout>
    <x-slot name="header">
            <x-h2>Card</x-h2>
    </x-slot>
    <x-slot name="main">
        {{ Breadcrumbs::render('card', $card) }}
        <x-card>
            <x-slot name="header">
                <x-h3>Info</x-h3>
                <section class="flex space-x-1">
                    @livewire('admin.card-update', ['card' => $card], key($card->id))
                    @livewire('admin.card-delete', ['card' => $card], key($card->id))
                </section>
            </x-slot>
            <x-slot name="content">
                @livewire('admin.card-read',['card' => $card])
            </x-slot>
        </x-card>
    </x-slot>
</x-app-layout>