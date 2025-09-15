@extends('frontend.layouts.app')

@section('title', 'Apex-Scrap Category Details')

@section('content')

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">

            {{-- Category Header --}}
            <div class="text-center mb-12">
                <h3 class="h3 font-bold text-primary mb-2">{{ $category->name }}</h3>
                <p class="text-gray-700">
                    {{ app()->getLocale() == 'zh'
                        ? '这里有全部 ' . $category->name . ' 材料'
                        : 'Here are all ' . $category->name . ' Materials' }}
                </p>
            </div>


            @if ($category->products->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach ($category->products as $product)
                        <div
                            class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 rounded-lg overflow-hidden flex flex-col">

                            {{-- Product Image --}}
                            @if ($product->image)
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                    class="h-48 w-full object-cover">
                            @else
                                <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="No image"
                                    class="h-48 w-full object-cover">
                            @endif

                            {{-- Product Info --}}
                            <div class="p-4 flex-1 flex flex-col justify-between">
                                <div>
                                    <h5 class="text-lg font-bold text-gray-800 mb-2">{{ $product->name }}</h5>
                                    <p class="text-gray-600 text-sm"> {!! $product->description !!} </p>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            @else
                <p class="text-center text-gray-500 mt-6">
                    {{ app()->getLocale() == 'zh' ? '此类别下没有找到产品。' : 'No products found in this category.' }}</p>
            @endif

        </div>
    </section>

@endsection
