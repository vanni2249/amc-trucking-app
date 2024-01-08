<div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Number</small>
                    <br>
                    <b>
                        {{ $card->number ?? '...' }}
                    </b>
                </li>
                <li>
                    <small>key</small>
                    <br>
                    <b>{{ $card->key ?? '...' }}</b>
                </li>
                <li>
                    <small>Name</small>
                    <br>
                    <b>{{ $card->name ?? '...' }}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Station</small>
                    <br>
                    <b>{{ $card->station->name ?? '...' }}</b>
                </li>
                <li>
                    <small>Company</small>
                    <br>
                    <b>{{ $card->company->name ?? '...' }}</b>
                </li>
                <li>
                    <small>Driver</small>
                    <br>
                    <b>{{ $card->driver->name??'...' }}</b>
                </li>
                <li>
                    <small>Truck</small>
                    <br>
                    <b>{{ $card->truck->key??'...' }}</b>
                </li>
                <li>
                    <small>Status</small>
                    <br>
                    <b>
                        @if ($card->is_actived)
                            Enabled                            
                        @else
                            Disabled
                        @endif
                    </b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
        
                <li>
                    <small>Created by</small><br>
                    <b>{{$card->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$card->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$card->updated_at()}}</b>
                </li>
                
            </ul>
        </div>

    </div>
</div>
