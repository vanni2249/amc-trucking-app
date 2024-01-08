<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Name</small>
                    <br>
                    <b>
                        {{ $driver->name }}
                    </b>
                </li>
                <li>
                    <small>Email</small>
                    <br>
                    <b>
                        {{ $driver->email }}
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
                        {{ $driver->is_actived ? 'Enable' : 'Disable' }}
                    </b>
                </li>
            </ul>
        </div>
        <div class="text-sm">
            <ul class="space-y-2"></ul>
        </div>
    </div>
</div>
