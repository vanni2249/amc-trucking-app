<div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Truck number</small>
                    <br>
                    <b>
                        {{$truck->key}}
                    </b>
                </li>
                <li>
                    <small>Brand</small>
                    <br>
                    <b>
                        {{$truck->brand}} 
                    </b>
                </li>
                <li>
                    <small>Model</small>
                    <br>
                    <b>
                        {{$truck->model}}
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
                        {{$truck->lic}}
                    </b>
                </li>
                <li>
                    <small>Vin number</small>
                    <br>
                    <b>
                        {{$truck->vin}}
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
                    @if ($truck->is_actived)
                        {{__('Enable')}}    
                    @else
                        {{__('Disable')}}    
                    @endif
                    
                </b>
            </li>
           </ul>

        </div>

    </div>
</div>
