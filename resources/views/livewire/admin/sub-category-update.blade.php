<div>
    <div>
        <x-icon-edit-button wire:click="open" />
        <x-modal wire:model='show'>
            @slot('header')
                Update category
            @endslot
            @slot('content')
                <x-form wire:submit='save'>
                    @include('admin.categories.sub-categories.form')
                    <x-primary-button type="submit">Create</x-primary-button>
                </x-form>
            @endslot
        </x-modal>
    </div>
</div>
