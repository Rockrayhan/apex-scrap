       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap Home')

       @section('content')



           {{-- home banner --}}
           <section class="relative flex justify-center min-h-[80vh] bg-black/40 bg-cover bg-no-repeat bg-center"
               style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

               {{-- Dark overlay --}}
               <div class="absolute inset-0 bg-black opacity-50"></div>

               <div class="relative z-10 text-white px-5 md:px-10 flex flex-col gap-4 md:gap-8 mt-30 text-left">
                   <h1 class="h2 font-bold">
                       {{ app()->getLocale() == 'zh' ? '将您的废料变成' : 'Turn Your Scrap Into' }}
                       <br>
                       <span class="text-teal-400">
                           {{ app()->getLocale() == 'zh' ? '今天兑现' : 'Cash Today' }}
                       </span>
                   </h1>

                   <span class="text-xl text-white w-full md:w-2/3">
                       {{ app()->getLocale() == 'zh'
                           ? '我们向全球各行业供应优质再生废料，帮助您节省成本、确保质量并支持可持续发展。'
                           : 'We supply premium recycled scrap materials to industries worldwide—helping you save costs, ensure quality, and support sustainability.' }}
                   </span>

                   <div class="flex flex-col items-start md:items-center md:flex-row md:justify-start gap-6">
                       <button class="bg-teal-400 text-secondary rounded-3xl px-8 py-2 btn-hover">
                           {{ app()->getLocale() == 'zh' ? '获取免费报价' : 'Get Free Quote' }}
                       </button>
                       <button class="border-3 border-teal-400 text-teal-400 rounded-3xl px-8 py-2 btn-hover">
                           {{ app()->getLocale() == 'zh' ? '我们的服务' : 'Our Services' }}
                       </button>
                   </div>
               </div>
           </section>

           {{-- business area --}}
           <div class="bg-primary">
               <div
                   class="container mx-auto flex flex-col md:flex-row md:items-center md:justify-between text-white py-5 px-4">
                   <h6 class="h4 font-semibold mb-3 md:mb-0">
                       {{ app()->getLocale() == 'zh' ? '业务领域' : 'Business Areas' }}
                   </h6>

                   <div class="flex flex-wrap gap-x-8 gap-y-2">
                       <span class="hover:text-gray-200 cursor-pointer text-lg md:text-xl">
                           {{ app()->getLocale() == 'zh' ? '中国' : 'China' }}
                       </span>
                       <span class="hover:text-gray-200 cursor-pointer text-lg md:text-xl">
                           {{ app()->getLocale() == 'zh' ? '新加坡' : 'Singapore' }}
                       </span>
                       <span class="hover:text-gray-200 cursor-pointer text-lg md:text-xl">
                           {{ app()->getLocale() == 'zh' ? '日本' : 'Japan' }}
                       </span>
                       <span class="hover:text-gray-200 cursor-pointer text-lg md:text-xl">
                           {{ app()->getLocale() == 'zh' ? '迪拜' : 'Dubai' }}
                       </span>
                       <span class="hover:text-gray-200 cursor-pointer text-lg md:text-xl">
                           {{ app()->getLocale() == 'zh' ? '土耳其' : 'Turkey' }}
                       </span>
                   </div>
               </div>
           </div>

           {{-- we are --}}
           <section class="py-16 container grid grid-cols-1 md:grid-cols-2 gap-5">
               <div class="flex flex-col gap-3 p-2">
                   <h3 class="h3 text-primary font-semibold">
                       {{ app()->getLocale() == 'zh' ? '关于我们' : 'We Are' }}
                   </h3>

                   <hr class="border-b border-green-800">

                   <h6 class="h6">
                       {{ app()->getLocale() == 'zh'
                           ? 'Apex Scrap 向全球各行业提供高品质的再生废料。'
                           : 'Apex Scrap, we supply high-quality recycled scrap materials to industries worldwide.' }}
                   </h6>
                   <p class="p">
                       {{ app()->getLocale() == 'zh'
                           ? '从金属到电子产品，我们为您的企业提供可靠、可持续且有利可图的解决方案。'
                           : 'From metals to electronics, we deliver reliable, sustainable, and profitable solutions for your business.' }}
                   </p>

                   <div class="flex gap-12">
                       <div class="relative center bg-black/40 bg-cover bg-no-repeat bg-center"
                           style="background-image: url('{{ asset('/frontend/images/banner2.webp') }}')">

                           <div class="absolute inset-0 bg-teal-800 opacity-80"></div>

                           <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl">
                               <h3 class="h3 font-bold">
                                   {{ app()->getLocale() == 'zh' ? '美国总部' : 'USA Base' }}<br>
                                   {{ app()->getLocale() == 'zh' ? '全球' : 'Global' }}<br>
                                   {{ app()->getLocale() == 'zh' ? '出口商' : 'Exporter' }}
                               </h3>
                           </div>
                       </div>

                       <div class="flex flex-col gap-10">
                           <ul class="list-disc">
                               <li>{{ app()->getLocale() == 'zh' ? '全球出口专业知识' : 'Global Export Expertise' }}</li>
                               <li>{{ app()->getLocale() == 'zh' ? '全球出口专业知识' : 'Global Export Expertise' }}</li>
                               <li>{{ app()->getLocale() == 'zh' ? '全球出口专业知识' : 'Global Export Expertise' }}</li>
                               <li>{{ app()->getLocale() == 'zh' ? '全球出口专业知识' : 'Global Export Expertise' }}</li>
                           </ul>

                           <button class="btn-primary btn-hover">
                               {{ app()->getLocale() == 'zh' ? '了解更多' : 'Read More' }}
                           </button>
                       </div>
                   </div>
               </div>

               <div class="relative inline-block cursor-pointer group"
                   onclick="document.getElementById('video_modal').showModal()">
                   <img src="{{ asset('/frontend/images/banner2.webp') }}" alt="" class="w-full h-auto">

                   <img src="{{ asset('/frontend/images/play-icon.svg') }}" alt="Play"
                       class="absolute -top-2 right-0 w-18 h-18 border-b-5 border-l-5 border-white p-4 
            transition-transform duration-300 ease-in-out group-hover:scale-120">
               </div>

               <dialog id="video_modal" class="modal">
                   <div class="modal-box max-w-3xl">
                       <div class="aspect-video">
                           <iframe class="w-full h-96 rounded-lg" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                               title="Video" frameborder="0"
                               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                               allowfullscreen></iframe>
                       </div>
                       <div class="modal-action">
                           <form method="dialog">
                               <button class="btn">
                                   {{ app()->getLocale() == 'zh' ? '关闭' : 'Close' }}
                               </button>
                           </form>
                       </div>
                   </div>

                   <form method="dialog" class="modal-backdrop">
                       <button>{{ app()->getLocale() == 'zh' ? '关闭' : 'Close' }}</button>
                   </form>
               </dialog>
           </section>


           {{-- What we sell --}}
           <section class="pb-16 container">
               <div class="center flex-col gap-4 py-6">
                   <div class="center gap-3">
                       <hr class="border-b-2 border-green-800 w-12 md:w-18 lg:w-28">
                       <h3 class="h3 text-primary font-bold">
                           {{ app()->getLocale() == 'zh' ? '我们出售的产品' : 'What We Sell' }}
                       </h3>
                       <hr class="border-b-2 border-green-800 w-12 md:w-18 lg:w-28">
                   </div>

                   <p class="text-center w-full md:w-2/3">
                       {{ app()->getLocale() == 'zh'
                           ? '我们专注于采购和供应优质的再生废料，以满足全球制造商、冶炼厂和工业买家的需求。'
                           : 'We specialize in sourcing and supplying premium recycled scrap materials to meet the needs of manufacturers, smelters, and industrial buyers globally.' }}
                   </p>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                   {{-- Ferrous Metals --}}
                   <div class="flex flex-col gap-4">
                       <img src="{{ asset('/frontend/images/cat-1.png') }}" alt="">
                       <h4 class="h4 font-semibold">
                           {{ app()->getLocale() == 'zh' ? '黑色金属' : 'Ferrous Metals' }}
                       </h4>
                       <p>
                           {{ app()->getLocale() == 'zh'
                               ? '您现在可以出售任何旧的家庭金属制品，包括旧家电、铸铁水槽和浴缸。'
                               : 'Now you can sell any old household metal items, including old appliances, cast iron sinks, and tubs.' }}
                       </p>
                       <div>
                           <button
                               class="border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 btn-hover">
                               <span>{{ app()->getLocale() == 'zh' ? '查看更多' : 'See More' }}</span>
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                   stroke="currentColor" class="size-4">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                               </svg>
                           </button>
                       </div>
                   </div>

                   {{-- Non-Ferrous Metals --}}
                   <div class="flex flex-col gap-4">
                       <img src="{{ asset('/frontend/images/cat-2.png') }}" alt="">
                       <h4 class="h4 font-semibold">
                           {{ app()->getLocale() == 'zh' ? '有色金属' : 'Non-Ferrous Metals' }}
                       </h4>
                       <p>
                           {{ app()->getLocale() == 'zh'
                               ? '您现在可以出售任何旧的家庭金属制品，包括旧家电、铸铁水槽和浴缸。'
                               : 'Now you can sell any old household metal items, including old appliances, cast iron sinks, and tubs.' }}
                       </p>
                       <div>
                           <button
                               class="border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 btn-hover">
                               <span>{{ app()->getLocale() == 'zh' ? '查看更多' : 'See More' }}</span>
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                   stroke="currentColor" class="size-4">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                               </svg>
                           </button>
                       </div>
                   </div>

                   {{-- Catalytic Converters --}}
                   <div class="flex flex-col gap-4">
                       <img src="{{ asset('/frontend/images/cat-1.png') }}" alt="">
                       <h4 class="h4 font-semibold">
                           {{ app()->getLocale() == 'zh' ? '催化转化器' : 'Catalytic Converters' }}
                       </h4>
                       <p>
                           {{ app()->getLocale() == 'zh'
                               ? '您现在可以出售任何旧的家庭金属制品，包括旧家电、铸铁水槽和浴缸。'
                               : 'Now you can sell any old household metal items, including old appliances, cast iron sinks, and tubs.' }}
                       </p>
                       <div>
                           <button
                               class="border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 btn-hover">
                               <span>{{ app()->getLocale() == 'zh' ? '查看更多' : 'See More' }}</span>
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                   stroke="currentColor" class="size-4">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                               </svg>
                           </button>
                       </div>
                   </div>
               </div>
           </section>

           {{-- Business Reviews --}}
           <section class="bg-gray-200 py-16">
               <div class="container">
                   <h3 class="h3 text-center font-bold text-primary">
                       {{ app()->getLocale() == 'zh' ? '客户评价' : 'Business Reviews' }}
                   </h3>
                   <div class="flex justify-end gap-5 py-5"> {{-- left arrow --}} <button
                           class="border-green-800 border-2 p-1 cursor-pointer swiper-button-prev-custom"> <svg
                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                               stroke="currentColor" class="size-6">
                               <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                           </svg> </button> {{-- right arrow --}} <button
                           class="border-green-800 border-2 p-1 cursor-pointer swiper-button-next-custom"> <svg
                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                               stroke="currentColor" class="size-6">
                               <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                           </svg> </button> </div> {{-- Swiper slider --}} <div class="swiper swiper-review">
                       <div class="swiper-wrapper"> {{-- card --}} <div class="swiper-slide">
                               <div class="flex flex-col gap-8 bg-[#626262] p-6 rounded-lg text-white shadow-2xl">
                                   <div class="flex gap-2"> {{-- your stars --}} <svg xmlns="http://www.w3.org/2000/svg"
                                           fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                           class="size-6">
                                           <path stroke-linecap="round" stroke-linejoin="round"
                                               d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                       </svg> </div>
                                   <p> “We are a culturally rooted creative studio in Yogyakarta, partnering with
                                       forward-thinking brands to reimagine what's possible- through powerful design,
                                       strategy, and storytelling.” </p>
                                   <div class="flex justify-between items-center">
                                       <div>
                                           <h6 class="font-bold text-lg">Herris Adom</h6>
                                           <p class="text-sm"> Managing Director </p>
                                       </div>
                                       <div> <img src="{{ asset('/frontend/images/client-1.png') }}" alt="">
                                       </div>
                                   </div>
                               </div>
                           </div> {{-- card --}} <div class="swiper-slide">
                               <div class="flex flex-col gap-8 bg-[#626262] p-6 rounded-lg text-white shadow-2xl">
                                   <div class="flex gap-2"> {{-- your stars --}} <svg xmlns="http://www.w3.org/2000/svg"
                                           fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                           class="size-6">
                                           <path stroke-linecap="round" stroke-linejoin="round"
                                               d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                       </svg> </div>
                                   <p> “We are a culturally rooted creative studio in Yogyakarta, partnering with
                                       forward-thinking brands to reimagine what's possible- through powerful design,
                                       strategy, and storytelling.” </p>
                                   <div class="flex justify-between items-center">
                                       <div>
                                           <h6 class="font-bold text-lg">Herris Adom</h6>
                                           <p class="text-sm"> Managing Director </p>
                                       </div>
                                       <div> <img src="{{ asset('/frontend/images/client-1.png') }}" alt="">
                                       </div>
                                   </div>
                               </div>
                           </div> {{-- card --}} <div class="swiper-slide">
                               <div class="flex flex-col gap-8 bg-[#626262] p-6 rounded-lg text-white shadow-2xl">
                                   <div class="flex gap-2"> {{-- your stars --}} <svg xmlns="http://www.w3.org/2000/svg"
                                           fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                           class="size-6">
                                           <path stroke-linecap="round" stroke-linejoin="round"
                                               d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                       </svg> </div>
                                   <p> “We are a culturally rooted creative studio in Yogyakarta, partnering with
                                       forward-thinking brands to reimagine what's possible- through powerful design,
                                       strategy, and storytelling.” </p>
                                   <div class="flex justify-between items-center">
                                       <div>
                                           <h6 class="font-bold text-lg">Herris Adom</h6>
                                           <p class="text-sm"> Managing Director </p>
                                       </div>
                                       <div> <img src="{{ asset('/frontend/images/client-1.png') }}" alt="">
                                       </div>
                                   </div>
                               </div>
                           </div> {{-- card --}} <div class="swiper-slide">
                               <div class="flex flex-col gap-8 bg-[#626262] p-6 rounded-lg text-white shadow-2xl">
                                   <div class="flex gap-2"> {{-- your stars --}} <svg xmlns="http://www.w3.org/2000/svg"
                                           fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                           class="size-6">
                                           <path stroke-linecap="round" stroke-linejoin="round"
                                               d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                       </svg> </div>
                                   <p> “We are a culturally rooted creative studio in Yogyakarta, partnering with
                                       forward-thinking brands to reimagine what's possible- through powerful design,
                                       strategy, and storytelling.” </p>
                                   <div class="flex justify-between items-center">
                                       <div>
                                           <h6 class="font-bold text-lg">Herris Adom</h6>
                                           <p class="text-sm"> Managing Director </p>
                                       </div>
                                       <div> <img src="{{ asset('/frontend/images/client-1.png') }}" alt="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>


           {{-- Business Partners --}}
           <section class="py-16">
               <h3 class="h3 text-primary text-center py-5 font-bold">
                   {{ app()->getLocale() == 'zh' ? '合作伙伴' : 'Business Partners' }}
               </h3>

               <p class="text-center w-full md:w-2/3 container mb-6">
                   {{ app()->getLocale() == 'zh'
                       ? '在 Apex Scrap，我们相信成长源于强大的合作关系。多年来，我们与制造商、回收商、钢铁厂、铸造厂和全球贸易公司建立了长期合作，他们信赖我们提供稳定的质量和可靠的供应。'
                       : 'Apex Scrap, we believe growth comes through strong partnerships. Over the years, we’ve built lasting relationships with manufacturers, recyclers, steel mills, foundries, and global trading companies who trust us for consistent quality and reliable supply.' }}
               </p>

               <div class="bg-secondary py-10">
                   <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 place-items-center">
                       <img src="{{ asset('/frontend/images/client-1.png') }}" alt="Client 1"
                           class="transition duration-300 ease-in-out hover:grayscale hover:scale-105" />
                       <img src="{{ asset('/frontend/images/client-2.png') }}" alt="Client 2"
                           class="transition duration-300 ease-in-out hover:grayscale hover:scale-105" />
                       <img src="{{ asset('/frontend/images/client-3.png') }}" alt="Client 3"
                           class="transition duration-300 ease-in-out hover:grayscale hover:scale-105" />
                       <img src="{{ asset('/frontend/images/client-4.png') }}" alt="Client 4"
                           class="transition duration-300 ease-in-out hover:grayscale hover:scale-105" />
                       <img src="{{ asset('/frontend/images/client-5.png') }}" alt="Client 5"
                           class="transition duration-300 ease-in-out hover:grayscale hover:scale-105" />
                   </div>
               </div>
           </section>



       @endsection
