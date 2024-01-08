<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Sub-contract</small><br>
                    <b>{{ $payroll->contract->name }}</b>
                </li>
                <li>
                    <a href="{{ route('admin.payrolls.works.index', ['payroll' => $payroll]) }}">
                        <small>Works</small>
                        <br>
                        <b>
                            {{ $payroll->works()->count() }}
                        </b>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payrolls.works.index',['payroll' => $payroll]) }}">
                        <small>Works amount</small>
                        <br>
                        <b>{{ $payroll->amount_works() }}</b>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payrolls.deductions.index',['payroll' => $payroll]) }}">
                        <small>Deductions amount</small>
                        <br>
                        <b>{{ $payroll->amount_deductions() }}</b>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payrolls.fuels.index',['payroll' => $payroll]) }}">
                        <small>Fuels amount</small>
                        <br>
                        <b>{{ $payroll->amount_fuels() }}</b>
                    </a>
                </li>
                <li>
                    <small>Net amount</small>
                    <br>
                    <b>{{ $payroll->amount_net() }}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Started at</small><br>
                    <b>{{ $payroll->started_at() ?? '...' }}</b>
                </li>
                <li>
                    <small>Completed at</small><br>
                    <b>{{ $payroll->completed_at() ?? '...' }}</b>
                </li>
                <li>
                    <small>Paid at</small>
                    <br>
                    <b>{{ $payroll->paid_at() }}</b>
                </li>
                <li>
                    <small>View at</small>
                    <br>
                    <b>{{ $payroll->view_at() }}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Created by</small><br>
                    <b>{{ $payroll->user->name }}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{ $payroll->created_at() }}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{ $payroll->updated_at() }}</b>
                </li>
            </ul>
        </div>
    </div>
</div>
