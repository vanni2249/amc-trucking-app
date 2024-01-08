<div>
    <x-select-input wire:model.live="year">
        @for ($i = 2022; $i <= $ty; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </x-select-input>
</div>
