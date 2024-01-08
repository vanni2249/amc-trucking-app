@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (!isset($form->deduction))
    <div>
        <x-input-label>Category</x-input-label>
        <x-select-input class="w-full" wire:model.live='form.category_id'>
            <option value="">Choose</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </x-select-input>
        @error('form.category_id')
            <small class="text-red-600">{{ $message }}</small>
        @enderror
    </div>
@endif
@if ($form->category == 'insurance')
    <div>
        <x-input-label>Insurance</x-input-label>
        <x-select-input class="w-full" wire:model.live='form.insurance_id'>
            <option value="">Choose</option>
            @foreach ($insurances as $insurance)
                <option value="{{ $insurance->id }}" class="flex justify-between">
                    <div>
                        {{ $insurance->insurance->company->name }}
                    </div>
                    =
                    <div>
                        {{ $insurance->amount() }}
                    </div>
                </option>
            @endforeach
        </x-select-input>
        @error('form.insurance_id')
            <small class="text-red-600">{{ $message }}</small>
        @enderror
    </div>
@endif
@if ($form->category == 'loan')
    <div>
        <x-input-label value="Loan" />
        <x-select-input wire:model.live='form.loan_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($loans as $loan)
                @if ($loan->amount != $loan->deductions()->sum('amount'))
                    <option value="{{ $loan->id }}">Principal = {{ $loan->amount() }} Balance =
                        {{ $loan->balance() }}</option>
                @endif
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.loan_id')" />
    </div>
@endif
@if ($form->category == 'gps')
    <div>
        <x-input-label value="Gps" />
        <x-select-input wire:model.live='form.gps_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($gps as $item)
                <option value="{{ $item->id }}">{{ $item->amount }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.gps_id')" />
    </div>
@endif
<div>
    <x-input-label>Amount</x-input-label>
    <x-text-input class="w-full" wire:model="form.amount"></x-text-input>
    @error('form.amount')
        <small class="text-red-600">{{ $message }}</small>
    @enderror
</div>
@if ($form->category == 'other')
    <div>
        <x-input-label value="Comment" />
        <x-text-input wire:model='form.comment' class="w-full" />
        <x-input-error :messages="$errors->get('form.comment')" />
    </div>
@endif
