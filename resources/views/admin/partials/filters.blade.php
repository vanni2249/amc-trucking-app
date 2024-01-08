<div class="pb-4">
    <x-select-input wire:model.live='paginate'>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
    </x-select-input>
    <x-text-input wire:model.live='search' placeholder="Search" />
</div>