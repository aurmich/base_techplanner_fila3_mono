@props(['title', 'subtitle', 'image', 'cta-text', 'cta-link', 'background-color' => 'bg-gradient-to-br from-primary/5 via-base-100 to-primary/10', 'text-color' => 'text-base-content', 'cta-color' => 'btn-primary'])

<div class="relative overflow-hidden {{ $background-color }}">
    @if(isset($image))
        <div class="absolute inset-0 z-0">
            <img src="{{ $image }}" alt="" class="w-full h-full object-cover opacity-10">
        </div>
    @endif

    <!-- Decorative blob shapes -->
    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full bg-primary/20 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2 w-[500px] h-[500px] rounded-full bg-secondary/20 blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 py-16 lg:py-24">
            <div class="flex-1 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm font-semibold tracking-wide">Innovazione nella <slogan></span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight {{ $text-color }} font-inter leading-[1.1] mb-8">
                    {!! nl2br(e($title)) !!}
                </h1>

                <p class="text-xl {{ $text-color }} opacity-90 font-inter max-w-2xl lg:max-w-none mb-12">
                    {{ $subtitle }}
                </p>

                @if(isset($cta-text) && isset($cta-link))
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ $cta-link }}" class="btn {{ $cta-color }} px-8 py-3 text-lg font-semibold rounded-full shadow-lg hover:scale-105 transition-transform">
                            {{ $cta-text }}
                        </a>
                    </div>
                @endif
            </div>
            <div class="flex-1 flex justify-center lg:justify-end">
                @if(isset($image))
                    <img src="{{ $image }}" alt="" class="max-w-xs rounded-2xl shadow-xl">
                @endif
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-12 border-t border-base-200">
            <div class="text-center">
                <p class="text-3xl font-bold text-primary">500+</p>
                <p class="text-sm opacity-70">Utenti Assistiti</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-primary">15+</p>
                <p class="text-sm opacity-70">Specialisti</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-primary">98%</p>
                <p class="text-sm opacity-70">Soddisfazione</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-primary">24/7</p>
                <p class="text-sm opacity-70">Supporto Online</p>
            </div>
        </div>
    </div>
</div>
