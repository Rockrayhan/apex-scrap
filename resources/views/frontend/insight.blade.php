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

                        {{-- blog image --}}
                        <figure>
                            <img src="{{ $blog->image ? asset($blog->image) : asset('frontend/images/placeholder.jpg') }}"
                                alt="{{ $blog->title ?? 'Blog image' }}" class="w-full h-48 object-cover" loading="lazy" />
                        </figure>


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
                                {!! Str::limit(strip_tags($blog->description), 100) !!}
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


        {{-- extra insight content --}}
        <section class="bg-gray-100 py-16">
            <div class="container max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                {{-- Left Side: Illustration / Image --}}
                <div class="order-2 md:order-1">
                    <img src="/frontend/images/insight-1.jpg" alt="Apex Scrap Recycling" class="rounded-lg shadow-md"
                        loading="lazy">
                </div>

                {{-- Right Side: Content --}}
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-primary mb-4">
                        {{ app()->getLocale() == 'zh' ? 'Apex Scrap – 将废物转化为机遇' : 'Apex Scrap – Turning Waste into Opportunity' }}
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        {{ app()->getLocale() == 'zh'
                            ? '在 Apex Scrap，我们帮助企业有效回收废料，将废品转化为有价值的资源。通过这样做，我们促进可持续产品开发并减少环境影响。'
                            : 'At Apex Scrap, we help businesses recycle waste effectively, transforming scrap into valuable resources. By doing so, we contribute to sustainable product development and reduce environmental impact.' }}
                    </p>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        {{ app()->getLocale() == 'zh'
                            ? '我们处理的每一吨材料，都在支持资源节约、节能和减少污染，为行业和地球带来积极影响。'
                            : 'Every ton of material we process supports resource conservation, energy savings, and pollution reduction, making a positive difference for industries and the planet.' }}
                    </p>
                    <p class="font-semibold text-lg text-primary italic">
                        {{ app()->getLocale() == 'zh'
                            ? '您的废料，我们的专业，共创绿色未来。'
                            : 'Your scrap, our expertise, a greener future.' }}
                    </p>
                </div>
            </div>
        </section>




        {{-- Call to Action --}}
        <section class="py-16 bg-gray-200 text-center">
            <h3 class="h3 text-primary font-bold mb-4">
                {{ app()->getLocale() == 'zh' ? '准备好与我们合作了吗？' : 'Ready to Partner with Us?' }}
            </h3>
            <p class="mb-6 w-full md:w-2/3 mx-auto">
                {{ app()->getLocale() == 'zh'
                    ? '今天就联系我们，让您的废金属成为可持续未来的一部分。'
                    : 'Get in touch with us today and turn your scrap into part of a sustainable future.' }}
            </p>
            <a href="{{ route('contact') }}">
                <button class="bg-white text-primary font-bold px-6 py-3 rounded-lg shadow-md btn-hover">
                    {{ app()->getLocale() == 'zh' ? '联系我们' : 'Contact Us' }}
                </button>
            </a>
        </section>


    @endsection
