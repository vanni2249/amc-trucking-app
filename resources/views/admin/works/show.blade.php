<x-app-layout>
    @slot('header')
        <x-h2>Work`</x-h2>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('works',$work) }}
        <x-card>
            @slot('header')
                <x-h3>Info</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.work-update', ['work' => $work], key($work->id))
                    @livewire('admin.work-delete', ['work' => $work], key($work->id))
                </div>
            @endslot
            @slot('content')
                @livewire('admin.work-read', ['work' => $work])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
