<ul class="grid grid-cols-1 md:grid-cols-5 items-center">
    <li>
        <small>
            {{ $fuel->fuel_type->name }}
        </small>
        <br>
        <b>
            {{ $fuel->state->name }}
        </b>
    </li>
    <li>
        <small>
            {{ $fuel->driver->name }}
        </small>
        <br>
        <b>
            {{ $fuel->station->name }}
        </b>
    </li>
    <li>
        <small>
            {{ $fuel->company->name }}
        </small>
        <br>
        <b>
            @if ($fuel->truck_id)
                T-{{ $fuel->truck->key ?? '...' }}
            @endif
            @if ($fuel->vehicle_id)
                V-{{ $fuel->vehicle->key ?? '' }}
            @endif
        </b>
    </li>
    <li>
        @if ($fuel->fuel_type->key == 'other')
            <b>Misselanius</b>
        @else
            <small>
                {{ $fuel->fuel_unit->name ?? '...' }}
            </small>
            <br>
            <b>
                {{ $fuel->units ?? '...' }}/{{ $fuel->price_unit() ?? '' }}
            </b>
        @endif
    </li>
    <li>
        <small>{{ $fuel->made_at() ?? '...' }}</small><br>
        <b>{{ $fuel->amount() }}</b>

    </li>

</ul>
