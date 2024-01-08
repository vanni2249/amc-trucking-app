<div class="bg-white shadow sm:rounded-lg">
    @if (isset($header))
        <header class="flex justify-between p-4 pb-0 items-center">
            {{$header}}
        </header>
    @endif
    @if (isset($content))
        <section class="p-4">
            {{$content}}
        </section>
    @endif
    {{$slot}}
</div>