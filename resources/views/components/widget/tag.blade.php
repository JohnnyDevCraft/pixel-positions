@props(['tag','size'=> 'base'])

@php
    if ($size === 'base'){
        $classes = "bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl transition-colors duration-300";
    }

    if ($size === 'small'){
         $classes = "bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl transition-colors duration-300 text-[.625rem]";
    }
@endphp

<a href="/search/tags/{{ strtolower($tag->name) }}" {{$attributes(['class'=> $classes])}}>{{$tag->name}}</a>

