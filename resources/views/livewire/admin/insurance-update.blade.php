<div>
    {{-- @if ($work->invoices()->count() == 0) --}}
        <x-primary-button wire:click="open">edit</x-primary-button>
    {{-- @endif --}}
    <x-modal wire:model='show'>
        @slot('header')
            Update insurance
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.insurances.form')
                <x-primary-button type="submit">update</x-primary-button>
            </x-form>
        @endslot
    </x-modal>

</div>
