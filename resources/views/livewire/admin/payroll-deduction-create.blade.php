<div>
    <x-primary-button wire:click="open">
        Add deduction
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Add deduction
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.payrolls.deductions.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
