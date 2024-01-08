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
    <x-input-label value="Started at" />
    <x-date-input wire:model='form.started_at' class="w-full" />
    <x-input-error :messages="$errors->get('form.started_at')" />
</div>

<div>
    <x-input-label value="Completed at" />
    <x-date-input wire:model='form.completed_at' class="w-full" />
    <x-input-error :messages="$errors->get('form.completed_at')" />
</div>