<div>
    <section class="py-4 space-y-2">
        @forelse ($insurance->insurances()->get() as $insurance)
            <x-card-item>
                <a href="{{ route('admin.insurances.companies.show', ['insurance' => $insurance->insurance_id, 'company' => $insurance->company->id]) }}"
                    class="block grow">
                    <ul class="grow grid grid-rows-1 md:grid-cols-3 items-center">
                        <li>
                            <small>{{ $insurance->company->name }}</small>
                            <br>
                            <b>{{ $insurance->amount() }}</b>
                        </li>
                        <li>
                            <small>Deductions</small>
                            <br>
                            <b>{{ $insurance->sum_deductions() }}</b>
                        </li>
                        <li>
                            <b>{{ $insurance->balance_company() }}</b>
                        </li>
                    </ul>
                </a>
            </x-card-item>
        @empty
            non data...
        @endforelse
    </section>
</div>
