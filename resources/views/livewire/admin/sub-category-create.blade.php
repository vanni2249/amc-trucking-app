<div>
    <x-primary-button wire:click="open">
        New sub-category
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create sub-category
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.categories.sub-categories.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
