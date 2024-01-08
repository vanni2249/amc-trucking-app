<div>
    <div class="space-y-2">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <section>
                <ul>
                    <li>
                        <b>
                            {{$user->name}}
                        </b>
                        <br>
                        <small>
                            {{$user->email}}
                        </small>
                    </li>
                </ul>
            </section>
            <section>
                <ul>
                    <li>
                        <b>
                            @if ($user->hasRole('admin'))
                                Administrator
                            @else
                                Client
                            @endif
                        </b>
                    </li>
                </ul>
            </section>
        </div>
    </div>  
</div>

