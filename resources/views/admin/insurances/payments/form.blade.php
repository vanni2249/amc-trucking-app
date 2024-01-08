<div class="w-full">
    <x-input-label>Amount</x-input-label>
    <x-number-input placeholder="0.00" step="0.01" class="w-full" wire:model="form.amount"></x-number-input>
    <x-input-error :messages="$errors->get('form.made_at')" />
</div>
<div class="w-full">
    <x-input-label>Started date</x-input-label>
    <x-date-input wire:model='form.made_at' class="w-full"></x-date-input>
    <x-input-error :messages="$errors->get('form.made_at')" />
</div>
