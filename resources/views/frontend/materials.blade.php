 @extends('frontend.layouts.app')

 @section('title', 'Apex-Scrap Services')

 @section('content')

     {{-- banner --}}
     <section class="relative center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
         style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

         {{-- Dark overlay --}}
         <div class="absolute inset-0 bg-black opacity-70"></div>

         <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
             <h1 class="h2 font-bold text-center">
                 <span>{{ app()->getLocale() == 'zh' ? '我们的' : 'Our' }}</span>
                 <span class="text-third">{{ app()->getLocale() == 'zh' ? '材料' : 'Materials' }}</span>
             </h1>
             <p class="w-full md:w-5/6 text-white text-center">
                 {{ app()->getLocale() == 'zh'
                     ? 'Apex Scrap 不仅提供废料供应—我们为全球工业提供量身定制的解决方案。无论您是国际买家、业务合作伙伴还是大型工业企业，我们的服务旨在确保可靠性、透明度和长期价值。'
                     : 'Apex Scrap, we go beyond supplying scrap—we deliver tailored solutions for global industries. Whether you’re an international buyer, a business partner, or a large-scale industry, our services are designed to ensure reliability, transparency, and long-term value.' }}
             </p>
         </div>

     </section>


     {{-- first category --}}
     <section class="py-16 bg-gray-200">

         @php
             $firstCategory = $categories->first();
         @endphp

         @if ($firstCategory)
             <div class="container">

                 {{-- Category Name --}}
                 <div class="center flex-col">
                     <h3 class="h3 text-primary font-bold py-6">{{ $firstCategory->name }}</h3>

                     <p class="p w-full md:w-2/3">
                         {{ app()->getLocale() == 'zh'
                             ? '铁合金是工业制造的骨干，以其强度、耐用性和多功能性而闻名。它们广泛应用于建筑、汽车、造船和重型机械。Apex Scrap 提供符合国际标准的高质量铁合金废料，支持全球工业。'
                             : 'Ferrous metals are the backbone of industrial manufacturing, valued for their strength, durability, and versatility. They are widely used in construction, automotive, shipbuilding, and heavy machinery. At Apex Scrap, we supply high-quality ferrous scrap that meets international standards and supports industries worldwide.' }}
                     </p>


                 </div>

                 {{-- Category Products --}}
                 <div class="grid grid-cols-1 md:grid-cols-3 mt-8 md:mt-16 gap-y-6">

                     {{-- Product List --}}
                     <div class="col-span-1">
                         <h6 class="h6 font-bold"> {{ app()->getLocale() == 'zh' ? '我们供应 :' : 'We Supply :' }} </h6>
                         <ul class="list-disc ms-5">
                             @foreach ($firstCategory->products->take(8) as $product)
                                 <li>{{ $product->name }}</li>
                             @endforeach
                         </ul>
                     </div>

                     {{-- Product Images --}}
                     <div class="col-span-2">
                         <div class="grid grid-cols-2 md:grid-cols-4 gap-x-2 gap-y-4">
                             @foreach ($firstCategory->products->take(8) as $product)
                                 @if ($product->image)
                                     <label for="product-modal" class="cursor-pointer">
                                         <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                             class="h-30 w-30 object-cover rounded hover:scale-105 transition"
                                             onclick="document.getElementById('modal-img').src='{{ asset($product->image) }}'">
                                     </label>
                                 @else
                                     <label for="product-modal" class="cursor-pointer">
                                         <img src="{{ asset('/frontend/images/placeholder.jpg') }}" alt="No Image"
                                             class="h-30 w-30  rounded"
                                             onclick="document.getElementById('modal-img').src='{{ asset('/frontend/images/placeholder.jpg') }}'">
                                     </label>
                                 @endif
                             @endforeach
                         </div>
                     </div>

                     <!-- DaisyUI Modal -->
                     <input type="checkbox" id="product-modal" class="modal-toggle" />
                     <div class="modal">
                         <div class="modal-box relative max-w-4xl">
                             <label for="product-modal"
                                 class="btn btn-sm btn-circle bg-red-400 font-bold text-white absolute right-2 top-2">✕</label>
                             <img id="modal-img" src="" alt="Product Image" class="max-h-[80vh] mx-auto rounded-lg">
                         </div>
                     </div>



                 </div>

                 {{-- Link to Category Details Page --}}
                 <div class="center mt-6">
                     <a href="{{ route('categoryDetailsPage', $firstCategory->id) }}">
                         <button
                             class="border-3 border-green-800 px-6 py-1 text-primary flex items-center gap-2.5 btn-hover">
                             <span>{{ app()->getLocale() == 'zh' ? '查看全部' : 'See All' }}</span>
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-4">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                             </svg>
                         </button>
                     </a>
                 </div>

             </div>
         @endif
     </section>

     {{-- Second Category --}}
     <section class="py-16">

         @php
             $secondCategory = $categories->skip(1)->first();
         @endphp

         @if ($secondCategory)
             <div class="container">

                 {{-- Category Name --}}
                 <div class="center flex-col">
                     <h3 class="h3 text-primary font-bold py-6">{{ $secondCategory->name }}</h3>

                     <p class="p w-full md:w-2/3">
                         {{ app()->getLocale() == 'zh'
                             ? '有色金属具有耐腐蚀、轻量化的特性，在多个行业中具有高市场价值。它们在电子、电气、航空航天、汽车和包装等领域至关重要。Apex Scrap 提供优质有色废料，确保全球冶炼厂、精炼厂和回收企业的可靠供应。'
                             : 'Non-ferrous metals are corrosion-resistant, lightweight, and hold high market value across multiple industries. They are essential in electrical, aerospace, automotive, and packaging sectors. Apex Scrap provides premium-grade non-ferrous scrap, ensuring reliable supply for smelters, refiners, and recyclers globally.' }}
                     </p>
                 </div>

                 {{-- Category Products --}}
                 <div class="grid grid-cols-1 md:grid-cols-3 mt-8 md:mt-16 gap-y-6">

                     {{-- Product List --}}
                     <div class="col-span-1">
                         <h6 class="h6 font-bold">{{ app()->getLocale() == 'zh' ? '我们供应 :' : 'We Supply :' }}</h6>
                         <ul class="list-disc ms-5">
                             @foreach ($secondCategory->products->take(8) as $product)
                                 <li>{{ $product->name }}</li>
                             @endforeach
                         </ul>
                     </div>

                     {{-- Product Images - Second Category --}}
                     <div class="col-span-2">
                         <div class="grid grid-cols-2 md:grid-cols-4 gap-x-2 gap-y-4">
                             @foreach ($secondCategory->products->take(8) as $product)
                                 <label for="product-modal" class="cursor-pointer">
                                     <img src="{{ $product->image ? asset($product->image) : asset('/frontend/images/placeholder.jpg') }}"
                                         alt="{{ $product->name }}"
                                         class="h-30 w-30 object-cover rounded hover:scale-105 transition"
                                         onclick="document.getElementById('modal-img').src='{{ $product->image ? asset($product->image) : asset('/frontend/images/placeholder.jpg') }}'">
                                 </label>
                             @endforeach
                         </div>
                     </div>


                     <!-- Shared DaisyUI Modal -->
                     <input type="checkbox" id="product-modal" class="modal-toggle" />
                     <div class="modal">
                         <div class="modal-box relative max-w-4xl">
                             <label for="product-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                             <img id="modal-img" src="" alt="Product Image" class="max-h-[80vh] mx-auto rounded-lg">
                         </div>
                     </div>
                 </div>

                 {{-- Link to Category Details Page --}}
                 <div class="center mt-6">
                     <a href="{{ route('categoryDetailsPage', $secondCategory->id) }}">
                         <button
                             class="border-3 border-green-800 px-6 py-1 text-primary flex items-center gap-2.5 btn-hover">
                             <span>{{ app()->getLocale() == 'zh' ? '查看全部' : 'See All' }}</span>
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-4">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                             </svg>
                         </button>
                     </a>
                 </div>

             </div>
         @endif
     </section>

     {{-- Third Category --}}
     <section class="py-16 bg-gray-200">

         @php
             $thirdCategory = $categories->skip(2)->first();
         @endphp

         @if ($thirdCategory)
             <div class="container grid grid-cols-1 md:grid-cols-3 gap-y-6">

                 {{-- Category Info --}}
                 <div class="col-span-2 flex flex-col justify-center gap-10 pe-4">

                     <h3 class="text-primary h3">
                         <b>{{ app()->getLocale() == 'zh' ? '特殊材料' : 'Special Materials' }}</b> {{ $thirdCategory->name }}
                     </h3>

                     <p class="p w-full md:w-5/6">
                         {{ app()->getLocale() == 'zh'
                             ? '特殊材料包括驱动现代工业和可持续回收的高需求废料。这些材料对可再生能源、技术和先进制造至关重要。Apex Scrap 提供经过认证的特殊材料，确保可追溯性和质量合规。'
                             : 'Special materials include high-demand scraps that power modern industries and sustainable recycling. These materials are critical for renewable energy, technology, and advanced manufacturing. At Apex Scrap, we source and supply certified special materials, ensuring traceability and quality compliance.' }}
                     </p>

                     {{-- Link to Category Details Page --}}
                     <div class="flex flex-col mt-6">
                         <a href="{{ route('categoryDetailsPage', $thirdCategory->id) }}">
                             <button
                                 class="border-3 border-green-800 px-6 py-1 text-primary flex items-center gap-2.5 btn-hover">
                                 <span>{{ app()->getLocale() == 'zh' ? '查看全部' : 'See All' }}</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                     <path stroke-linecap="round" stroke-linejoin="round"
                                         d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                 </svg>
                             </button>
                         </a>
                     </div>
                 </div>

                 {{-- Category Image --}}
                 <div class="col-span-1">
                     @if ($thirdCategory->products->first() && $thirdCategory->products->first()->image)
                         <img src="{{ asset($thirdCategory->products->first()->image) }}"
                             alt="{{ $thirdCategory->name }}" class="h-50 md:h-70 lg:h-100 w-auto">
                     @else
                         <img src="{{ asset('/frontend/images/placeholder.jpg') }}" alt="No Image" class="h-30 w-full">
                     @endif
                 </div>

             </div>
         @endif
     </section>


     {{-- Ready to Turn Your Scrap Into Cash? --}}
     <section class="py-16 container center flex-col gap-6">

         <h3 class="h3 font-bold">
             {{ app()->getLocale() == 'zh' ? '准备将您的废料' : 'Ready to Turn Your Scrap' }}
             <span class="text-primary">
                 {{ app()->getLocale() == 'zh' ? '变现吗？' : 'Into Cash?' }}
             </span>
         </h3>

         <p class="p w-full md:w-2/3 text-center">
             {{ app()->getLocale() == 'zh'
                 ? '立即获取免费报价，了解您的废金属价值。我们提供有竞争力的价格和专业的服务。'
                 : 'Get a free quote today and discover how much your scrap metal is worth. We offer competitive prices and professional service.' }}
         </p>

         <div class="flex flex-col items-center md:flex-row md:justify-start gap-6">
             <button class="bg-teal-400 rounded-3xl px-8 py-2 btn-hover">
                 {{ app()->getLocale() == 'zh' ? '立即开始' : 'Get Started Today' }}
             </button>
             <button class="border-3 border-teal-400 text-teal-400 rounded-3xl px-8 py-2 btn-hover">
                 {{ app()->getLocale() == 'zh' ? '电话 +31000000099' : 'Cell +31000000099' }}
             </button>
         </div>

     </section>


 @endsection
