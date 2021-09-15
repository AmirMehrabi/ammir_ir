<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="rtl flex flex-col justify-between min-h-screen bg-orange-100 text-gray-800 leading-normal font-sans">
        <nav id="header" class="fixed w-full z-10 top-0">
            <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to left, #2c5282 var(--scroll), transparent 0);"></div>
        </nav>
        <header class="flex items-center  bg-orange-100 h-12 py-4" role="banner">
            <div class="container flex items-center max-w-5xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        {{-- <img class="h-8 md:h-10 ml-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" /> --}}

                        <h1 class="text-lg md:text-2xl text-gray-800 font-semibold hover:text-gray-600 my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-5xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        {{-- <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none font-sans">

                <li class="font-sans">
                    ساخته شده روی <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    و <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer> --}}
        <footer class="bg-white border-t border-gray-400 shadow">
            <div class="container max-w-4xl mx-auto flex py-8">
    
                <div class="w-full mx-auto flex flex-wrap">
                    <div class="flex w-full md:w-2/3 ">
                        <div class="px-6">
                            {{-- <h3 class="font-bold text-gray-900">درباره</h3> --}}
                            <p class="py-3 text-gray-600 text-sm">
                                ساخته شده به صورت آزاد روی سکوهای <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                                و <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                            </p>
                            نسخه ۰.۵.۰ - <a href="/changelog" class="text-gray-700 hover:text-gray-900 hover:underline">تاریخچه تغییرات</a>
                        </div>
                    </div>
                </div>
    
    
    
            </div>
        </footer>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>