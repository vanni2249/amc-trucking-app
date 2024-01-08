<div>
    <div class="flex flex-row md:flex-col">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Name</small>
                    <br>
                    <b>
                        {{$state->name}}
                    </b>
                </li>
                <li>
                    <small>Status</small>
                    <br>
                    <b>
                        @if ($state->is_actived)
                            Actived
                        @else
                            Desactived
                        @endif
                    </b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3"></div>
        <div class="w-full md:w-1/3"></div>

    </div>
</div>
