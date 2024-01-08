<div>
    <x-primary-button wire:click='open'>
        {{ __('Create gps term') }}
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            <x-h3>
                {{ __('Create gps') }}
            </x-h3>
        @endslot
        @slot('content')
        <x-form wire:submit='save'>
            @include('admin.gps.form')
            <x-primary-button type="submit">Save</x-primary-button>
        </x-form>    

        @endslot
    </x-modal>
</div>
