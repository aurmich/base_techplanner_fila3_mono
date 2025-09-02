<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

name('home');

// Load the page content from JSON
$pageContent = [];
$contentPath = config('local.pages_path', base_path('config/local/predict/database/content/pages/1.json'));

if (File::exists($contentPath)) {
    $pageContent = json_decode(File::get($contentPath), true);
}

$locale = LaravelLocalization::getCurrentLocale();
$content = $pageContent['content_blocks'][$locale] ?? [];

new class extends Component {
    public $content;
    
    public function mount($content) {
        $this->content = $content;
    }
    
    public function render():mixed {
        return view('pages.home', ['content' => $this->content]);
    }
};

?>

<x-layouts.marketing>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @foreach($content as $block)
            @if($block['type'] === 'hero')
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-8">
                    <div class="px-6 py-8 sm:p-12">
                        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $block['data']['title'] }}</h1>
                        <p class="text-xl text-gray-600 mb-6">{{ $block['data']['subtitle'] }}</p>
                        @if(isset($block['data']['cta_text']) && isset($block['data']['cta_link']))
                            <a href="{{ $block['data']['cta_link'] }}" 
                               class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                {{ $block['data']['cta_text'] }}
                            </a>
                        @endif
                    </div>
                </div>
            
            @elseif($block['type'] === 'predict_list')
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-8">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="text-2xl font-semibold text-gray-900">{{ $block['data']['title'] }}</h2>
                    </div>
                    <div class="border-t border-gray-200">
                        @livewire('predict.market-list', ['method' => $block['data']['method']])
                    </div>
                </div>
                
            @elseif($block['type'] === 'features')
                <div class="py-12 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                {{ $block['data']['title'] }}
                            </h2>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                {{ $block['data']['subtitle'] }}
                            </p>
                        </div>

                        <div class="mt-10">
                            <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                                @foreach($block['data']['items'] as $item)
                                    <div class="relative">
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <x-dynamic-component :component="$item['icon']" class="h-6 w-6" />
                                        </div>
                                        <div class="ml-16">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $item['title'] }}</h3>
                                            <p class="mt-2 text-base text-gray-500">
                                                {{ $item['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-layouts.marketing>
