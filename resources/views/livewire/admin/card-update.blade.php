<div>
    <x-primary-button wire:click="open">edit</x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Update card
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.cards.form')
                <x-primary-button type="submit">update</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
