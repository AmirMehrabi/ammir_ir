@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')

<div class="flex flex-col sm:flex-row ">
    
    <div class="w-full sm:w-2/3 md:w-3/4 text-black font-light text-lg text-right px-4 py-2 m-2 leading-relaxed">
        <time datetime="{{ $page->date }}" class="font-serif font-thin text-gray-800">{{ date('d M, Y', $page->date) }}</time>

        <h1 class="font-serif text-2xl sm:text-3xl md:text-4xl font-bold mb-3 mt-0">{{ $page->title }}</h1>
        @if ($page->cover_image)
            <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
        @endif
        {{-- @if ($page->categories)
            @foreach ($page->categories as $i => $category)
                <a
                    href="{{ '/blog/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 text-xs font-semibold rounded ml-4 px-3 pt-px"
                >{{ $category }}</a>
            @endforeach
        @endif --}}

        @yield('content')

    </div>
</div>
    {{-- @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-700 text-xl md:mt-0">{{ $page->author }}  •  {{ jdate($page->date)->format('%A، %d %B %Y') }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav> --}}


    <script>
        /* Progress bar */
        //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
        var h = document.documentElement,
            b = document.body,
            st = 'scrollTop',
            sh = 'scrollHeight',
            progress = document.querySelector('#progress'),
            scroll;
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");

        document.addEventListener('scroll', function() {

            /*Refresh scroll % width*/
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');

            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;


        });


        //Javascript to toggle the menu
        // document.getElementById('nav-toggle').onclick = function() {
        //     document.getElementById("nav-content").classList.toggle("hidden");
        // }
    </script>
@endsection
