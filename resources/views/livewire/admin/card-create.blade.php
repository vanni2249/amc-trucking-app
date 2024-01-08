<div>
    <x-primary-button wire:click="open">
        {{ __('New Card') }}
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            {{__('Create card')}}
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.cards.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
