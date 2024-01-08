<div>
    <x-primary-button wire:click="open">edit</x-primary-button>
    <x-modal wire:model="show">
        @slot('header')
            Edit payment company
        @endslot
        @slot('content')
            <x-form wire:submit='update'>
                @include('admin.insurances.payments.form')
                <x-primary-button type="submit">update</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
