<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Reference</small><br>
                    <b>{{ $insurance->reference }}</b>
                </li>
                <li>
                    <small>Company</small>
                    <br>
                    <b>
                        {{ $insurance->company->name }}
                    </b>
                </li>
                <li>
                    <small>Started at</small>
                    <br>
                    <b>{{ $insurance->started_at() }}</b>
                </li>
                <li>
                    <small>Completed at</small>
                    <br>
                    <b>{{ $insurance->completed_at() }}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.insurances.companies.index', ['insurance' => $insurance]) }}" class="block">
                        <small>Companies</small>
                        <br>
                        <b>{{ $insurance->insurances()->count() }}</b>
                    </a>
                </li>
                <li>
                    <small>Gross</small>
                    <br>
                    <b>{{ $insurance->gross() }}</b>
                </li>
                <li>
                    <a href="{{ route('admin.insurances.payments.index',['insurance' => $insurance]) }}" class="block">
                        <small>Payments</small>
                        <br>
                        <b>{{ $insurance->sum_payments() ?? '...' }}</b>
                    </a>
                </li>
                <li>
                    <small>Deductions</small>
                    <br>
                    <b>...</b>
                </li>
                <li>
                    <small>Balance</small>
                    <br>
                    <b>...</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Created by</small><br>
                    <b>{{ $insurance->user->name }}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{ $insurance->created_at() }}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{ $insurance->updated_at() }}</b>
                </li>
            </ul>
        </div>
    </div>
</div>
