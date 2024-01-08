<div>
    <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <a href="" class="block">
                    <x-widget title="Works" value="{{ $works_sum }}" count="{{ $works_count }}"></x-widget>
                </a>
            </div>
            <div>
                <a href="" class="block">
                    <x-widget title="Payrolls" value="{{ $payrolls_works_sum }}" count="{{ $payrolls_count }}"></x-widget>
                </a>
            </div>
            <div>
                <a href="" class="block">
                    <x-widget title="Fuels" value="{{ $fuels_sum }}" count="{{ $fuels_count }}"></x-widget>
                </a>
            </div>
            <div>
                <a href="" class="block">
                    <x-widget title="Insurance" value="0.00" count="0"></x-widget>
                </a>
            </div>
        </div>
    </div>
</div>
