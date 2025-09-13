@extends('frontend.layouts.app')

@section('title', $blog->title . ' | Apex-Scrap Blog')

@section('content')

    {{-- Banner --}}
    <section class="relative flex items-center justify-center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-center"
        style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black opacity-70"></div>

        <div class="relative z-10 text-white text-center px-5 md:px-10 max-w-3xl">
            <h1 class="h2 font-bold mb-4">
                {{ $blog->title }}
            </h1>
            <p class="text-gray-200">
                Leading the way in sustainable metal recycling for over 15 years. Committed to environmental
                responsibility and customer satisfaction.
            </p>
        </div>
    </section>

    {{-- Blog Content --}}
    <section class="py-16 container">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
            {{-- Blog Image --}}
            @if($blog->image)
                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"
                    class="w-full h-80 object-cover">
            @endif

            {{-- Blog Details --}}
            <div class="p-8">
                {{-- Meta Info --}}
                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                    <span>✍️ {{ $blog->author ?? 'Admin' }}</span>
                    <span>📅 {{ $blog->created_at->format('F d, Y') }}</span>
                </div>

                {{-- Title --}}
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    {{ $blog->title }}
                </h2>

                {{-- Description / Body --}}
                <div class="prose max-w-none text-gray-700 leading-relaxed">
                    {!! $blog->description !!} 
                </div>
            </div>
        </div>

        {{-- Related Blogs --}}
        <div class="mt-16">
            <h3 class="text-xl font-bold text-gray-800 mb-6">Related Blogs</h3>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($relatedBlogs as $related)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <a href="{{ route('blogDetailsPage', $related->id) }}">
                            @if($related->image)
                                <img src="{{ asset($related->image) }}" alt="{{ $related->title }}"
                                    class="h-40 w-full object-cover rounded-t-lg">
                            @endif
                            <div class="p-4">
                                <h4 class="font-semibold text-gray-900 line-clamp-2">
                                    {{ $related->title }}
                                </h4>
                                <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                                    {{-- {{ Str::limit($related->description, 80) }} --}}
                                    {!! Str::limit(strip_tags($related->description), 80) !!}
                                </p>
                                <span class="text-xs text-gray-400 mt-3 block">{{ $related->created_at->format('M d, Y') }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
