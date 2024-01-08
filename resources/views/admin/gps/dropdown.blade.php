<div class="hidden sm:flex sm:items-center sm:ms-6">
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
            <x-dropdown-link :href="route('admin.gps.companies.index', ['gps' => $gps])">
                {{ __('Companies') }}
            </x-dropdown-link>
            
        </x-slot>
    </x-dropdown>
</div>

