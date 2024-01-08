<div>
    <x-primary-button wire:click="open">
        {{ __('New State') }}
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            {{__('Create state')}}
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.states.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
