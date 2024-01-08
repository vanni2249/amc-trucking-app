{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
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
    <x-input-label value="Amount" />
    <x-number-input wire:model='form.amount' class="w-full"/>
    <x-input-error :messages="$errors->get('form.amount')" />
</div>