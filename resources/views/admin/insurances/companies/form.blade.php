{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
@if (!isset($form->company_id))
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
@endif
<div>
    <x-input-label>Amount</x-input-label>
    <x-number-input placeholder="0.00" step="0.01" class="w-full" wire:model="form.amount"></x-number-input>
    @error('form.amount')
        <small class="text-red-600">{{ $message }}</small>
    @enderror
</div>
