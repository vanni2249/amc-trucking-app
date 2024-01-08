<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Fuel type</small><br>
                    <b>
                        {{$fuel->fuel_type->name}}
                    </b>
                </li>
                <li>
                    <small>State</small><br>
                    <b>
                        {{$fuel->state->name}}
                    </b>
                </li>
                <li>
                    <small>Station</small><br>
                    <b>{{$fuel->station->name}}</b>
                </li>
                <li>
                    <small>Driver</small><br>
                    <b>
                        {{$fuel->driver->name??'...'}}
                    </b>
                </li>
                <li>
                    <small>Truck</small><br>
                    <b>
                        {{$fuel->truck->key??'...'}}
                    </b>
                </li>
                <li>
                    <small>Vehicle</small>
                    <br>
                    <b>
                        {{$fuel->vehicle->key??'...'}}
                    </b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Card</small><br>
                    <b>
                        {{$fuel->card->name}}
                    </b>
                </li>
                <li>
                    <small>Fuel unit</small><br>
                    <b>
                        {{$fuel->fuel_unit->name??'...'}}
                    </b>
                </li>
                <li>
                    <small>Units</small><br>
                    <b>
                        {{$fuel->units??'...'}}
                    </b>
                </li>
                <li>
                    <small>Price unit</small><br>
                    <b>
                        {{($fuel->price_unit)?$fuel->price_unit():'...'}}
                    </b>
                </li>
                <li>
                    <small>Discount</small><br>
                    <b>
                        {{($fuel->discount) ? $fuel->discount() : '...'}}
                    </b>
                </li>
                <li>
                    <small>Amount</small><br>
                    <b>
                        {{$fuel->amount()}}
                    </b>
                </li>
                
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Payment</small>
                    <br>
                    <b>...</b>
                </li>
                <li>
                    <small>Payroll</small><br>
                    <b>...</b>
                </li>
                <li>
                    <small>Created by</small><br>
                    <b>{{$fuel->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$fuel->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$fuel->updated_at()}}</b>
                </li>
                
            </ul>
        </div>
    </div>
</div>
