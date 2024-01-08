<div>
    <x-primary-button wire:click='open'>new payment</x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            {{ __('Create payment') }}
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.payments.form')
                <x-primary-button type='submit'>Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
