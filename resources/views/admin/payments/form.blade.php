@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (!isset($form->payment))
    <div>
        <x-input-label value="Type payment"></x-input-label>
        <x-select-input wire:model.live="form.type_payment_id" class="w-full">
            <option value="">Choose</option>
            @foreach ($payments_types as $payment_type)
                <option value="{{ $payment_type->id }}">{{ $payment_type->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.type_payment_id')" />
    </div>
@endif
@if ($form->payment_type == 'insurance')
    <div>
        <x-input-label value="Insurance"></x-input-label>
        <x-select-input wire:model='form.insurance_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($insurances as $insurance)
                <option value="{{ $insurance->id }}">{{ $insurance->company->name }} {{ $insurance->started_at() }} |
                    {{ $insurance->completed_at() }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.insurance_id')" />
    </div>
@endif
<div>
    <x-input-label value="Amount"></x-input-label>
    <x-number-input wire:model='form.amount' placeholder="0.00" step="0.01" min="0" class="w-full" />
    <x-input-error :messages="$errors->get('form.amount')" />
</div>
<div>
    <x-input-label value="Made at"></x-input-label>
    <x-date-input wire:model='form.made_at' class="w-full" />
    <x-input-error :messages="$errors->get('form.made_at')" />
</div>
