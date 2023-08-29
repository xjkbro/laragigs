@props(['tagsCSV'])
@php
    $tags = explode(',', $tagsCSV);
@endphp

@foreach ($tags as $tag)
    <a href="/?tag={{ $tag }}"
        class="bg-orange-500 text-white rounded-full px-2 py-1 text-sm">{{ $tag }}</a>
@endforeach
