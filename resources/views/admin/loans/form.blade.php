<div>
    <x-input-label value="Company" />
    <x-select-input wire:model='form.company_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.company_id')" />
</div>
<div>
    <x-input-label value="Date" />
    <x-date-input wire:model='form.made_at' class="w-full" />
    <x-input-error :messages="$errors->get('form.made_at')" />
</div>
<div>
    <x-input-label value="Amount" />
    <x-number-input wire:model='form.amount' min="0" step='0.01' class="w-full" />
    <x-input-error :messages="$errors->get('form.amount')" />
</div>
