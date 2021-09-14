@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')

<div class="flex flex-col sm:flex-row ">
    <div class="w-full sm:w-1/3 md:w-1/4 text-gray-700 text-center px-4 py-2 m-2">
        {{-- <div class="mb-5 text-center sm:text-left">
            <a href="{{ $page->baseUrl }}" class="p-2 bg-blue-800 rounded-full text-white text-lg font-bold">{{ $page->siteName }}</a>
        </div> --}}

        <div class="text-gray-800 text-xl sm:text-2xl md:text-3xl text-center sm:text-left font-thin">{{ $page->title }}</div>

        <div class="text-gray-800 text-sm md:text-normal font-light text-center sm:text-left">{{ $page->author }}</div>
        <div class="text-gray-800 text-sm md:text-normal font-light text-center sm:text-left">{{ jdate($page->date)->format('%A، %d %B %Y') }}</div>


        <div class="text-blue-700 text-center sm:text-left hover:underline">
            @if ($page->next_title)
            @endif
            @if ($previous = $page->getPrevious())

            <a href="{{ $previous->getUrl() }}" title="Older Post: {{ $previous->title }}" >بعدی:  {{ $previous->title }}</a>

        @endif
            
        </div>

    </div>
    <div class=" font-sans w-full sm:w-2/3 md:w-3/4 text-black font-light text-lg text-right px-4 py-2 m-2 leading-relaxed">
        {{-- <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3">{{ $page->title }}</h1> --}}
        @if ($page->cover_image)
            <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
        @endif
        @if ($page->categories)
            @foreach ($page->categories as $i => $category)
                <a
                    href="{{ '/blog/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 text-xs font-semibold rounded ml-4 px-3 pt-px"
                >{{ $category }}</a>
            @endforeach
        @endif

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
