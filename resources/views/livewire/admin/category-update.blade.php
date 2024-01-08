<div>
    {{-- @if ($category->categories->count() == 0 && $category->category_id == null) --}}
        <x-secondary-button wire:click="open">edit</x-secondary-button>
    {{-- @endif --}}

    <x-modal wire:model='show'>
        @slot('header')
            Update category
        @endslot
        <form wire:submit='save'>
            <div class="p-4 md:p-6 lg:p-6 space-y-4">
                @include('admin.categories.form')
                <div>
                    <x-primary-button type="submit">update</x-primary-button>
                </div>
            </div>
        </form>
    </x-modal>
</div>
