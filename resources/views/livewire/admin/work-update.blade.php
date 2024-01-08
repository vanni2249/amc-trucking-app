<div>
    @if ($work->invoices()->count() == 0)
    
    <x-primary-button wire:click="open">edit</x-primary-button>
    @endif
    <x-modal wire:model='show'>
        @slot('header')
            Update work
        @endslot
        <form wire:submit='save'>
            <div class="p-4 md:p-6 lg:p-6 space-y-4">
                @include('admin.works.form')
                <div>
                    <x-primary-button type="submit">update</x-primary-button>
                </div>
            </div>
        </form>
    </x-modal>

</div>
