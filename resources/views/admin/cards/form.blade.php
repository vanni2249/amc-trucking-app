<div>
    <x-input-label>{{ __('Number') }}</x-input-label>
    <x-text-input wire:model='form.number' class="w-full"></x-text-input>
    <x-input-error :messages="$errors->get('form.number')" />
</div>

<div>
    <x-input-label>{{ __('Key') }}</x-input-label>
    <x-text-input wire:model='form.key' class="w-full"></x-text-input>
    <x-input-error :messages="$errors->get('form.key')" />
</div>

<div>
    <x-input-label>{{ __('Name') }}</x-input-label>
    <x-text-input wire:model='form.name' class="w-full"></x-text-input>
    <x-input-error :messages="$errors->get('form.name')" />
</div>

<div>
    <x-input-label>{{ __('Station') }}</x-input-label>
    <x-select-input wire:model.live='form.station_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->name }}</option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.station_id')" />
</div>

<div>
    <x-input-label>{{ __('Company') }}</x-input-label>
    <x-select-input wire:model.live='form.company_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.company_id')" />
</div>

<div>
    <x-input-label>{{ __('Driver') }}</x-input-label>
    <x-select-input wire:model.live='form.driver_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($drivers as $driver)
            <option value="{{ $driver->id }}">{{ $driver->name }}</option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.driver_id')" />
</div>

<div>
    <x-input-label>{{ __('Truck') }}</x-input-label>
    <x-select-input wire:model.live='form.truck_id' class="w-full">
        <option value="">Choose</option>
        @foreach ($trucks as $truck)
            <option value="{{ $truck->id }}">{{ $truck->key }}</option>
        @endforeach
    </x-select-input>
    <x-input-error :messages="$errors->get('form.truck_id')" />
</div>
