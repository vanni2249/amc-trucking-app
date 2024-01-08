<div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Vehicle number</small>
                    <br>
                    <b>
                        {{$vehicle->key??'...'}}
                    </b>
                </li>
                <li>
                    <small>Year</small>
                    <br>
                    <b>
                        {{$vehicle->year??'...'}} 
                    </b>
                </li>
                <li>
                    <small>Brand</small>
                    <br>
                    <b>
                        {{$vehicle->brand??'...'}} 
                    </b>
                </li>
                <li>
                    <small>Model</small>
                    <br>
                    <b>
                        {{$vehicle->model??'...'}}
                    </b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>License plate</small>
                    <br>
                    <b>
                        {{$vehicle->lic??'...'}}
                    </b>
                </li>
                <li>
                    <small>Vin number</small>
                    <br>
                    <b>
                        {{$vehicle->vin??'...'}}
                    </b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
           <ul class="space-y-2">
            <li>
                <small>Status</small>
                <br>
                <b>
                    @if ($vehicle->is_actived)
                        {{__('Enabled')}}    
                    @else
                        {{__('Disabled')}}    
                    @endif
                    
                </b>
            </li>
           </ul>

        </div>

    </div>
</div>
