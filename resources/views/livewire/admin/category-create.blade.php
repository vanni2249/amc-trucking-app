<div>
    <x-primary-button wire:click="open">
        New category
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create category
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.categories.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
