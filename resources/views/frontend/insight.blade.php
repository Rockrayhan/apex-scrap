    @extends('frontend.layouts.app')

    @section('title', 'Apex-Scrap Insight')

    @section('content')

        {{-- banner --}}
        <section class="relative center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
            style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

            {{-- Dark overlay --}}
            <div class="absolute inset-0 bg-black opacity-70"></div>

            <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
                <h1 class="h2">
                    <span class="font-bold">
                        {{ app()->getLocale() == 'zh' ? '洞察 - ' : 'Insight - ' }}
                    </span>
                    <span class="text-third">Apex Scrap</span>
                </h1>

                <p class="w-full md:w-2/3 text-white text-center">
                    {{ app()->getLocale() == 'zh'
                        ? '在可持续金属回收领域领先超过15年。致力于环境责任和客户满意度。'
                        : 'Leading the way in sustainable metal recycling for over 15 years. Committed to environmental responsibility and customer satisfaction.' }}
                </p>

            </div>
        </section>


        {{-- industry blogs --}}
        <section class="py-16 container">

            <h3 class="h3 font-bold text-center text-primary">
                {{ app()->getLocale() == 'zh' ? '行业博客' : 'Industry Blog' }}
            </h3>

            <p class="p text-center w-full md:w-2/3 mx-auto my-5">
                {{ app()->getLocale() == 'zh'
                    ? '随时了解金属回收行业的最新新闻、见解和最佳实践。'
                    : 'Stay updated with the latest news, insights, and best practices in the metal recycling industry.' }}
            </p>



            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
                @foreach ($blogs as $blog)
                    <div class="card bg-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300">

                        {{-- Blog Image --}}
                        @if ($blog->image)
                            <figure>
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"
                                    class="w-full h-48 object-cover" />
                            </figure>
                        @endif

                        {{-- Blog Body --}}
                        <div class="card-body">

                            {{-- Title --}}
                            <h2 class="card-title text-lg font-semibold">
                                {{ $blog->title }}
                                @if ($blog->featured_in_home)
                                    <div class="badge bg-third">
                                        {{ app()->getLocale() == 'zh' ? '推荐' : 'Featured' }}
                                    </div>
                                @endif
                            </h2>

                            {{-- Meta Info --}}
                            <p class="text-sm text-gray-600">
                                {{ app()->getLocale() == 'zh' ? '作者' : 'Author' }}:
                                <span class="font-medium">{{ $blog->author }}</span>
                                |
                                {{ app()->getLocale() == 'zh' ? '分类' : 'Category' }}:
                                <span class="font-medium">{{ $blog->category }}</span>
                            </p>

                            {{-- Description --}}
                            <p class="text-sm text-gray-700 line-clamp-3">
                                {!! $blog->description !!}
                            </p>

                            {{-- Card Footer --}}
                            <div class="card-actions justify-end mt-2">
                                <a href="{{ route('blogDetailsPage', $blog->id) }}">

                                    <button
                                        class="border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 btn-hover">
                                        <span> {{ app()->getLocale() == 'zh' ? '查看更多' : 'See More' }} </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </section>



    @endsection
