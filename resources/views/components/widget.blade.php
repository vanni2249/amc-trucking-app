@props([
    'title' => $title,
    'value' => $value,
    'count' => $count??'',
])
<div class="p-6 rounded-md bg-white shadow">
    <header class="flex justify-between">
        <b>{{$title}}</b>
        <small>{{ $count }}</small>
    </header>
    <section>
        <p class="text-2xl">{{$value}}</p>
    </section>
    <footer>
        <small></small>
    </footer>
</div>