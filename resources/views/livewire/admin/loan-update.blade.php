<div>
    <x-primary-button wire:click='open'>Update</x-primary-button>
    <x-modal wire:model='show'>
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.loans.form')
                <x-primary-button type='submit'>Save</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
