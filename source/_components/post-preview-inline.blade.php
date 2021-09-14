<div class="flex flex-col mb-4">


    <h2 class="text-3xl m-0">
        <a
            href="{{ $post->getUrl() }}"
            title="بیشتر بخوانید - {{ $post->title }}"
            class="text-gray-900 font-thin hover:underline"
        >{{ $post->title }}</a>
    </h2>
    <p class="text-gray-700 font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>
    <p class="mb-4 mt-0">{!! $post->getExcerpt(1000) !!} <a
        href="{{ $post->getUrl() }}"
        title="بیشتر بخوانید - {{ $post->title }}"
        class=" hover:underline"
    >ادامه</a></p>

    
</div>
