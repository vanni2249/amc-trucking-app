@props([
    'bg' => 'gray',
    ])
<article {{$attributes->merge(['class' => 'bg-'.$bg.'-100 p-2 rounded group group-hover:bg-gray-200/[.6]'])}}>
    {{$slot}}
</article>