<div class="flex items-center ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <x-secondary-button>
                <div class="flex space-x-1">
                    <span>
                        Actions
                    </span>
                    <span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </div>
            </x-secondary-button>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link :href="route('admin.payrolls.show', ['payroll' => $payroll])">
                {{ __('Info') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('admin.payrolls.works.index', ['payroll' => $payroll])">
                {{ __('Works') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('admin.payrolls.deductions.index', ['payroll' => $payroll])">
                {{ __('Deductions') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('admin.payrolls.fuels.index', ['payroll' => $payroll])">
                {{ __('Fuels') }}
            </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>
