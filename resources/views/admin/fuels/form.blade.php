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
    <x-input-label>Fuel type</x-input-label>
    <x-select-input wire:model.live='form.fuel_type_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($fuel_types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.fuel_type_id')" />
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <x-input-label>State</x-input-label>
        <x-select-input wire:model='form.state_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.state_id')" />
    </div>
    <div>
        <x-input-label>Station</x-input-label>
        <x-select-input wire:model='form.station_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($stations as $station)
                <option value="{{ $station->id }}">{{ $station->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.station_id')" />
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <x-input-label>Company</x-input-label>
        <x-select-input wire:model.live='form.company_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.company_id')" />
    </div>
    <div>
        <x-input-label>Driver</x-input-label>
        <x-select-input wire:model='form.driver_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($drivers as $driver)
                <option value="{{ $driver->id }}">{{ $driver->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.driver_id')" />
    </div>
</div>
@if ($form->company_id)
    <div>
        <x-input-label>Card</x-input-label>
        <x-select-input wire:model.live='form.card_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($cards as $card)
                <option value="{{ $card->id }}">
                    {{ $card->company->name }} -
                    {{ $card->name }}
                </option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.card_id')" />
    </div>
@endif
@if ($form->fuel_type == 'diesel')
    <div>
        <x-input-label>Truck</x-input-label>
        <x-select-input wire:model='form.truck_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($trucks as $truck)
                <option value="{{ $truck->id }}">{{ $truck->key }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.truck_id')" />
    </div>
@endif
@if ($form->fuel_type == 'gas')
    <div>
        <x-input-label>Vehicle</x-input-label>
        <x-select-input wire:model='form.vehicle_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->key }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.vehicle_id')" />
    </div>
@endif
@if ($form->fuel_type != 'other')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <x-input-label>Fuel unit</x-input-label>
            <x-select-input wire:model='form.fuel_unit_id' class="w-full">
                <option value="">Choose</option>
                @foreach ($fuel_units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </x-select-input>
            <x-input-error :messages="$errors->get('form.fuel_unit_id')" />
        </div>
        <div>
            <x-input-label>Units</x-input-label>
            <x-number-input wire:model='form.units' placeholder="0.00" step="0.01" min="0"
                class="w-full"></x-number-input>
            <x-input-error :messages="$errors->get('form.units')" />
        </div>
        <div>
            <x-input-label>Price unit</x-input-label>
            <x-number-input wire:model='form.price_unit' placeholder="0.00" step="0.01" min="0" max="10.00"
                class="w-full"></x-number-input>
            <x-input-error :messages="$errors->get('form.price_unit')" />
        </div>
    </div>
@endif
<div>
    <x-input-label>Amount</x-input-label>
    <x-number-input wire:model='form.amount' placeholder="0.00" step="0.01" min="0"
        class="w-full"></x-number-input>
    <x-input-error :messages="$errors->get('form.amount')" />
</div>
<div>
    <x-input-label>Discount</x-input-label>
    <x-number-input wire:model='form.discount' placeholder="0.00" step="0.01" class="w-full"></x-number-input>
    <x-input-error :messages="$errors->get('form.discount')" />
</div>
<div>
    <x-input-label>Made date</x-input-label>
    <x-date-input wire:model='form.made_at' class="w-full"></x-date-input>
    <x-input-error :messages="$errors->get('form.made_at')" />
</div>
