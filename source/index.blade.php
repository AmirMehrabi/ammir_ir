@extends('_layouts.master')

@section('body')
    @foreach ($posts as $featuredPost)
        
            <div class="w-full md:w-4/5 mx-auto  mb-2 {{ $featuredPost->ltr == true  ? 'ltr text-left' : 'ltr text-right'}}" >
                {{-- @if ($featuredPost->cover_image)
                    <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
                @endif --}}

                {{-- <p class="text-gray-700 font-medium my-2">
                    {{ $featuredPost->getDate()->format('F j, Y') }}
                </p> --}}

                <time datetime="{{ $featuredPost->date }}" class="font-thin font-serif text-gray-800">{{ date('d M, Y', $featuredPost->date) }}</time>
                <h2 class="text-2xl font-medium mt-0 font-serif">
                    <a href="{{ $featuredPost->getUrl() }}" title="پست {{ $featuredPost->title }}" class="text-gray-900">
                        {{ $featuredPost->title }}
                    </a>
                </h2>

                {{-- <p class="mt-0 mb-4 font-light">
                    {!! $featuredPost->getExcerpt() !!}
                    <a href="{{ $featuredPost->getUrl() }}" title="ادامه {{ $featuredPost->title }}" class="hover:underline">
                        ادامه
                    </a>
                </p> --}}


                {{-- @if (! $loop->last)
                    <hr class="border-b my-6 border-gray-300">
                @endif --}}
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
