<section class="container mx-auto py-12">
    @if(!empty($title))
        <h2 class="text-3xl font-semibold">{{ $title }}</h2>
    @endif
    @if(!empty($content))
        <p class="mt-4 text-gray-700">{{ $content }}</p>
    @endif
</section>


