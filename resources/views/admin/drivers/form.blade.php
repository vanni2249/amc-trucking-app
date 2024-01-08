<div>
    <x-input-label>Name</x-input-label>
    <x-text-input class="w-full" wire:model="form.name"></x-text-input>
    <x-input-error :messages="$errors->get('form.name')" />
</div>
<div>
    <x-input-label>Email</x-input-label>
    <x-text-input class="w-full" wire:model="form.email"></x-text-input>
    <x-input-error :messages="$errors->get('form.email')" />
</div>
@isset($form->driver)
    <div>
        <label for="Status" class="flex space-x-3 items-center">
            <x-checkbox-input wire:model="form.is_actived"></x-checkbox-input>
            <span class="text-md">
                Enable
            </span>
        </label>
    </div>
@endisset
