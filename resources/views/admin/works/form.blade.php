<div class="flex flex-col md:flex-row  md:justify-between gap-4">
    <div class="w-full md:w-1/2">
        <x-input-label>Type</x-input-label>
        <x-select-input wire:model='form.category_id' class="w-full">
            <x-option-input value="">Choose</x-option-input>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
        </x-select-input>
        @error('form.category_id') <small class=" text-red-600">{{ $message }}</small> @enderror
    
    </div>
    <div class="w-full md:w-1/2">
        <x-input-label>Reference</x-input-label>
        <x-text-input class="w-full" wire:model="form.reference"></x-text-input>
        @error('form.reference')<small class="text-red-600">{{$message}}</small>@enderror
    </div>

</div>
<div class="flex flex-col md:flex-row  md:justify-between gap-4">

    <div class="w-full md:w-1/2">
        <x-input-label>Contract</x-input-label>
        <x-select-input  wire:model="form.contract_id" class="w-full">
            <option value="">Choose</option>
                @foreach ($contracts as $item)
                    <option value="{{$item->id}}">
                        {{$item->name}}
                @endforeach
            </option>
        </x-select-input>
        <x-input-error :messages="$errors->get('form.contract_id')" />
      
    </div>
    <div class="w-full md:w-1/2">
        <x-input-label>Sub contract</x-input-label>
        <x-select-input wire:model='form.sub_contract_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($sub_contracts as $item)
                <option value="{{$item->id}}" 
                    @if (isset($work))
                        {{($work->contract_id === '$item->id')?'checked':''}}
                    @endif
                    
                >
                    {{$item->name}}
                </option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('form.sub_contract_id')" />
    
    </div>
</div>
<div class="flex flex-col md:flex-row  md:justify-between gap-4">
    <div class="w-full md:w-1/2">
        <x-input-label>Driver</x-input-label>
        <x-select-input wire:model='form.driver_id' class="w-full">
            <option value="">Choose</option>
                @foreach ($drivers as $item)
                    <option value="{{$item->id}}" 
                        @if (isset($work))
                            {{($work->driver_id === '$item->id')?'checked':''}}
                        @endif
                        
                    >
                        {{$item->name}}
                @endforeach
            </option>
        </x-select-input>
        <x-input-error :messages="$errors->get('form.driver_id')"/>
    
    </div>
    <div class="w-full md:w-1/2">
        <x-input-label>Truck</x-input-label>
        <x-select-input wire:model='form.truck_id' class="w-full">
            <option value="">Choose</option>
            @foreach ($trucks as $item)
                <option value="{{$item->id}}" 
                    @if (isset($work))
                        {{($work->truck_id === '$item->id')?'checked':''}}
                    @endif
                    
                    >
                    {{$item->key}}
                    @endforeach
                </option>
        </x-select-input>
        <x-input-error :messages="$errors->get('form.truck_id')"/>
       
    </div>
</div>
<div class="flex flex-col md:flex-row  md:justify-between gap-4">
    <div class="w-full md:w-1/2">
        <x-input-label>Started date</x-input-label>
        <x-datetime-input wire:model='form.started_at' class="w-full"></x-datetime-input>
        <x-input-error :messages="$errors->get('form.started_at')" />
    </div>
    <div class="w-full md:w-1/2">
        <x-input-label>Completed date</x-input-label>
        <x-datetime-input wire:model='form.completed_at' class="w-full"></x-datetime-input>
        <x-input-error :messages="$errors->get('form.completed_at')" />
    </div>
</div>
<div class="flex flex-col md:flex-row  md:justify-between gap-4">
    <div class="w-full md:w-1/2">
        <x-input-label>Loads</x-input-label>
        <x-number-input placeholder="0" class="w-full" wire:model='form.loads'></x-number-input>
        <x-input-error :messages="$errors->get('form.loads')" />
    </div>
    <div class="w-full md:w-1/2">
        <x-input-label>Loads completed</x-input-label>
        <x-number-input placeholder="0" class="w-full" wire:model='form.loads_completed'></x-number-input>
        <x-input-error :messages="$errors->get('form.loads_completed')" />
    </div>
</div>
<div class="flex flex-col md:flex-row  md:justify-between gap-4">
    <div class="w-full md:w-1/2">
        <x-input-label>Price mile</x-input-label>
        <x-number-input placeholder="0.00" step="0.01" class="w-full" wire:model='form.price_mile'></x-number-input>
            @error('form.price_mile')
                <small class="text-red-600">{{$message}}</small>
                @enderror
            </div>
            <div class="w-full md:w-1/2">
                <x-input-label>Miles</x-input-label>
                <x-number-input placeholder="0.0" step="0.1" class="w-full" wire:model='form.miles'></x-number-input>
            @error('form.miles')
                    <small class="text-red-600">{{$message}}</small>
            @enderror
    </div>
</div>
<div>
    <x-input-label>Amount</x-input-label>
    <x-number-input placeholder="0.00" step="0.01" class="w-full" wire:model="form.amount"></x-number-input>
    @error('form.amount')
        <small class="text-red-600">{{$message}}</small>
    @enderror
</div>