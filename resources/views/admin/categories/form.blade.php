<div>
    <x-input-label>Name</x-input-label>
    <x-text-input wire:model.live='form.name' class="w-full"></x-text-input>
    <x-input-error :messages="$errors->get('form.name')" />
</div>