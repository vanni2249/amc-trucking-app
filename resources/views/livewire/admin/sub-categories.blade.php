<div>
    <ul class="grid grid-cols-1 md:grid-cols-4 gap-2">
        @forelse ($categories as $category)
            <li>
                <x-card-item>
                    <ul class="flex justify-between items-center">
                        <li>
                            <b>
                                {{$category->name}}
                            </b>
                        </li>
                        <li class="space-x-4">
                            @livewire('admin.sub-category-update', ['category' => $category], key($category->id))
                        </li>
                    </ul>
                </x-card-item>
            </li>
            
        @empty
            <x-non-data />
        @endforelse
    </ul>
</div>
