<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <x-slot name="main">
        <div class="space-y-6">
            <x-card>
                <x-slot name="content">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </x-slot>
    
            </x-card>
            <x-card>
                <x-slot name="content">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </x-slot>

            </x-card>
            {{-- <x-card>
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>

            </x-card> --}}
        </div>
    </x-slot>
</x-app-layout>
