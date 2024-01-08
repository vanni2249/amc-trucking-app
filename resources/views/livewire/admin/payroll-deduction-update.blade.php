<div>
    <x-primary-button wire:click="open">edit</x-primary-button>
    <x-modal wire:model="show">
        @slot('header')
            Edit payroll deduction
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.payrolls.deductions.form')
                <x-primary-button type="submit">update</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
