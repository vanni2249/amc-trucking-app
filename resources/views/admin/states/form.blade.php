<div>
    <x-input-label>Name</x-input-label>
    <x-text-input wire:model='form.name' class="w-full"></x-text-input>
    <x-input-error :messages="$errors->get('form.name')" />
</div>
<div>
    @if (isset($form->station))
        <label for="Status" class="flex space-x-3 items-center">
            <x-checkbox-input wire:model='form.is_actived'></x-checkbox-input>
            <span class="text-md">
                Enable
            </span>
        </label>
    @endif
</div>