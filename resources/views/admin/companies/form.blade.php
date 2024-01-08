<div>
    <x-input-label>Name</x-input-label>
    <x-text-input class="w-full" wire:model="form.name"></x-text-input>
    <x-input-error :messages="$errors->get('form.name')" />
</div>
<div>
    <x-input-label>Type</x-input-label>
    <x-select-input wire:model='form.category_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.category_id')" />
</div>
