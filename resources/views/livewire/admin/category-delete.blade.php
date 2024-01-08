<div>
    @if ($category->categories->count() == 0 )
        <x-danger-button wire:click="open">delete</x-danger-button>
    @endif
    <x-modal wire:model="show">
        <div class="p-4 md:p-6 lg:p-6 space-y-4">
            <h2 class="font-bold">Remonve company</h2>
            <p>
                Are you sure you want to delete the <b>{{$category->name}}</b>  category ?
            </p>
            <div class="flex space-x-1">
                <div>
                    <form wire:submit='delete'>
                        <div>
                            <x-danger-button type="submit">remove</x-danger-button>
                        </div>
                    </form>
                </div>
                <div>
                    <x-primary-button wire:click="close">cancel</x-primary-button>
                </div>
            </div>
        </div>
    </x-modal>
</div>
