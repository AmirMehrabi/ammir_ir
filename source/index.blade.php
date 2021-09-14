@extends('_layouts.master')

@section('body')
    @foreach ($posts as $featuredPost)
        <div class="w-full md:w-4/5 mx-auto mb-6">
            {{-- @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif --}}

            {{-- <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p> --}}

            <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="پست {{ $featuredPost->title }}" class="text-gray-900 font-thin hover:underline">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4 font-light">
                {!! $featuredPost->getExcerpt() !!}
                <a href="{{ $featuredPost->getUrl() }}" title="ادامه {{ $featuredPost->title }}" class="hover:underline">
                    ادامه
                </a>
            </p>


            @if (! $loop->last)
                <hr class="border-b my-6 border-blue-800">
            @endif
        </div>


    @endforeach

    {{-- @include('_components.newsletter-signup') --}}

    {{-- @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach --}}
@stop
