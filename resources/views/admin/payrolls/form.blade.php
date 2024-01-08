<div>
    <x-input-label>Sub-Contract</x-input-label>
    <x-select-input  wire:model="form.contract_id" class="w-full">
        <option value="">Choose</option>
            @foreach ($contracts as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>
            @endforeach
        </option>
    </x-select-input>
    <x-input-error :messages="$errors->get('form.contract_id')" />
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

<div>
    <x-input-label>Paid date</x-input-label>
    <x-date-input wire:model='form.paid_at' class="w-full"></x-date-input>
    <x-input-error :messages="$errors->get('form.paid_at')" />
</div>

<div>
    <x-input-label>View date</x-input-label>
    <x-datetime-input wire:model='form.view_at' class="w-full"></x-datetime-input>
    <x-input-error :messages="$errors->get('form.view_at')" />
</div>
