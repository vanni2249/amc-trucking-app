<div>
    <x-primary-button wire:click="open">edit</x-primary-button>
    <x-modal wire:model="show">
        @slot('header')
            Edit insurace company
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.insurances.companies.form')
                <x-primary-button type="submit">update</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
