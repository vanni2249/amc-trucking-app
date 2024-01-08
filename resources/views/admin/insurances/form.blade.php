<div class="w-full">
    <x-input-label>Reference</x-input-label>
    <x-text-input class="w-full" wire:model="form.reference"></x-text-input>
    @error('form.reference')
        <small class="text-red-600">{{ $message }}</small>
    @enderror
</div>
<div class="w-full">
    <x-input-label>Company</x-input-label>
    <x-select-input wire:model='form.company_id' class="w-full">
        <x-option-input value="">Choose</x-option-input>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">
                {{ $company->name }}
            </option>
        @endforeach
    </x-select-input>
    @error('form.company_id')
        <small class=" text-red-600">{{ $message }}</small>
    @enderror
</div>
<div class="flex flex-col md:flex-row  md:justify-between gap-4">
    <div class="w-full md:w-1/2">
        <x-input-label>Started date</x-input-label>
        <x-date-input wire:model='form.started_at' class="w-full"></x-date-input>
        <x-input-error :messages="$errors->get('form.started_at')" />
    </div>
    <div class="w-full md:w-1/2">
        <x-input-label>Completed date</x-input-label>
        <x-date-input wire:model='form.completed_at' class="w-full"></x-date-input>
        <x-input-error :messages="$errors->get('form.completed_at')" />
    </div>
</div>
