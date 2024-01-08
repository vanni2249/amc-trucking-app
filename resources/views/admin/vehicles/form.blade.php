<div>
    <x-input-label>Year</x-input-label>
    <x-number-input class="w-full" wire:model='form.year'></x-number-input>
</div>
<div>
    <x-input-label>Brand</x-input-label>
    <x-text-input class="w-full" wire:model="form.brand"></x-text-input>
</div>
<div>
    <x-input-label>Model</x-input-label>
    <x-text-input class="w-full" wire:model="form.model"></x-text-input>
</div>
<div>
    <x-input-label>Vin</x-input-label>
    <x-text-input class="w-full" wire:model="form.vin"></x-text-input>
</div>
<div>
    <x-input-label>Lic</x-input-label>
    <x-text-input class="w-full" wire:model="form.lic"></x-text-input>
</div>
<div>
    <x-input-label>Key</x-input-label>
    <x-text-input class="w-full" wire:model="form.key"></x-text-input>
    <x-input-error :messages="$errors->get('form.key')" />
</div>
<div>
    @if (isset($form->vehicle))
        <label for="Status" class="flex space-x-3 items-center">
            <x-checkbox-input wire:model='form.is_actived'></x-checkbox-input>
            <span class="text-md">
                Enable
            </span>
        </label>
    @endif
</div>