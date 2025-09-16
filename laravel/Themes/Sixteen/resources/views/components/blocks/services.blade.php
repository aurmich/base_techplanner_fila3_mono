<section class="container mx-auto py-12">
    @if(!empty($title))
        <h2 class="text-3xl font-semibold">{{ $title }}</h2>
    @endif

    @if(!empty($items) && is_array($items))
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($items as $service)
                <div class="p-6 border rounded-lg bg-white shadow-sm">
                    <h3 class="text-xl font-semibold">{{ $service['title'] ?? '' }}</h3>
                    @if(!empty($service['description']))
                        <p class="mt-2 text-gray-700">{{ $service['description'] }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</section>


