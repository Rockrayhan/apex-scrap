       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap Services')

       @section('content')

           {{-- banner --}}
           <section class="relative center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
               style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

               {{-- Dark overlay --}}
               <div class="absolute inset-0 bg-black opacity-70"></div>

               <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
                   <h1 class="h2 font-bold">
                       <span>{{ app()->getLocale() == 'zh' ? '我们的' : 'Our' }}</span>
                       <span class="text-third">{{ app()->getLocale() == 'zh' ? '服务' : 'Services' }}</span>
                   </h1>
                   <p class="w-full md:w-5/6 text-white text-center">
                       {{ app()->getLocale() == 'zh'
                           ? 'Apex Scrap 不仅供应废料，还为全球行业提供量身定制的解决方案。无论您是国际买家、商业合作伙伴，还是大型企业，我们的服务旨在确保可靠性、透明度和长期价值。'
                           : 'Apex Scrap, we go beyond supplying scrap—we deliver tailored solutions for global industries. Whether you’re an international buyer, a business partner, or a large-scale industry, our services are designed to ensure reliability, transparency, and long-term value.' }}
                   </p>
               </div>
           </section>

           {{-- Your Scrap, Our Global Reach --}}
           <section class="bg-gray-200 py-16">
               <div class="container grid md:grid-cols-2 grid-cols-1 gap-6">
                   <div class="col-span-1 flex flex-col gap-4">
                       <h3 class="h3 text-primary font-bold">
                           {{ app()->getLocale() == 'zh' ? '您的废料，我们的全球覆盖' : 'Your Scrap, Our Global Reach.' }}
                       </h3>
                       <h4 class="h4 font-bold">
                           {{ app()->getLocale() == 'zh' ? 'B2G – 企业至全球' : 'B2G – Business to Global' }}
                       </h4>
                       <p class="p">
                           {{ app()->getLocale() == 'zh'
                               ? '我们专注于向全球客户出口回收废料。凭借强大的物流和合规经验，我们能够无缝配送至亚洲、中东、非洲、欧洲和美洲。'
                               : 'We specialize in exporting recycled scrap materials to clients worldwide. Our strong logistics and compliance expertise allow us to deliver materials seamlessly across Asia, the Middle East, Africa, Europe, and the Americas' }}
                       </p>

                       <p class="font-bold">
                           {{ app()->getLocale() == 'zh' ? '您将获得：' : 'What you get:' }}
                       </p>
                       <ul class="ms-5">
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '接入全球供应与出口渠道' : 'Access to global supply & export channels' }}
                           </li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '国际级质量保证' : 'International-grade quality assurance' }}</li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '顺畅的文件与报关处理' : 'Smooth documentation & customs handling' }}
                           </li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '及时、安全、可靠的交付' : 'Timely, safe, and reliable delivery' }}
                           </li>
                       </ul>

                       <p class="text-primary p">
                           {{ app()->getLocale() == 'zh' ? '适合寻求稳定废料供应的国际行业和全球采购经理。' : 'Perfect for international industries and global procurement managers seeking consistent scrap supply.' }}
                       </p>
                   </div>

                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-1.jpg') }}"
                           alt="{{ app()->getLocale() == 'zh' ? '关于我们' : 'About us' }}" class="rounded-2xl shadow-2xl">
                   </div>
               </div>
           </section>

           {{-- Strong Partnerships --}}
           <section class="py-16">
               <div class="container grid md:grid-cols-2 grid-cols-1 gap-6">
                   <div class="col-span-1 center">
                       <img src="{{ asset('/frontend/images/about-2.jpg') }}"
                           alt="{{ app()->getLocale() == 'zh' ? '关于我们' : 'About us' }}" class="rounded-2xl shadow-2xl">
                   </div>

                   <div class="col-span-1 flex flex-col gap-4 px-3">
                       <h3 class="h3 text-primary font-bold text-start">
                           {{ app()->getLocale() == 'zh' ? '稳固的合作关系与可靠供应' : 'Strong Partnerships and Reliable Supply.' }}
                       </h3>
                       <h4 class="h4 font-bold">
                           {{ app()->getLocale() == 'zh' ? 'B2B – 企业对企业' : 'B2B – Business to Business' }}
                       </h4>

                       <p class="p">
                           {{ app()->getLocale() == 'zh'
                               ? '我们直接与制造商、冶炼厂、铸造厂和回收商合作，提供高质量的铁、非铁及电子废料。'
                               : 'We work directly with manufacturers, smelters, foundries, and recyclers to provide high-quality ferrous, non-ferrous, and electronic scrap materials.' }}
                       </p>

                       <p class="font-bold">
                           {{ app()->getLocale() == 'zh' ? '您将获得：' : 'What you get:' }}
                       </p>
                       <ul class="ms-5">
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '透明且有竞争力的定价' : 'Transparent, competitive pricing' }}</li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '稳定、持续的供应量' : 'Regular and consistent supply volumes' }}
                           </li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '根据行业需求定制废料解决方案' : 'Customized scrap solutions based on your industry needs' }}
                           </li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '长期合同专属支持' : 'Dedicated support for long-term contracts' }}
                           </li>
                       </ul>

                       <p class="text-primary p">
                           {{ app()->getLocale() == 'zh' ? '适合寻求可靠、稳定废料供应的企业。' : 'Ideal for businesses looking for a trusted, consistent scrap supplier.' }}
                       </p>
                   </div>
               </div>
           </section>

           {{-- Big Orders --}}
           <section class="bg-gray-200 py-16">
               <div class="container grid md:grid-cols-2 grid-cols-1 gap-6">
                   <div class="col-span-1 flex flex-col gap-4">
                       <h3 class="h3 text-primary font-bold">
                           {{ app()->getLocale() == 'zh' ? '大宗订单，更高价值' : 'Big Orders, Bigger Value.' }}
                       </h3>
                       <h4 class="h4 font-bold">
                           {{ app()->getLocale() == 'zh' ? '大宗合作伙伴' : 'Bulk Partners' }}
                       </h4>
                       <p class="p">
                           {{ app()->getLocale() == 'zh'
                               ? '针对大型买家和产业，我们提供大宗废料供应解决方案，帮助您降低成本，确保运营材料稳定。'
                               : 'For large-scale buyers and industries, we provide bulk scrap supply solutions—helping you cut costs and secure reliable material flow for your operations.' }}
                       </p>

                       <p class="font-bold">{{ app()->getLocale() == 'zh' ? '您将获得：' : 'What you get:' }}</p>
                       <ul class="ms-5">
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '大宗订单折扣及灵活定价方案' : 'Bulk order discounts & flexible pricing models' }}
                           </li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '优先物流与快速交付' : 'Priority logistics & faster delivery slots' }}
                           </li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '专属客户经理' : 'Dedicated account management' }}</li>
                           <li class="list-disc">
                               {{ app()->getLocale() == 'zh' ? '针对大宗稳定供应的定制合同' : 'Tailored contracts for volume stability' }}
                           </li>
                       </ul>

                       <p class="text-primary p">
                           {{ app()->getLocale() == 'zh' ? '适合大型制造商、钢厂及寻求稳定大宗废料供应的全球买家。' : 'Best suited for large manufacturers, steel mills, and global buyers seeking steady, large-volume scrap supply.' }}
                       </p>
                   </div>

                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-1.jpg') }}"
                           alt="{{ app()->getLocale() == 'zh' ? '大宗供应' : 'Bulk supply' }}" class="rounded-2xl shadow-2xl">
                   </div>
               </div>
           </section>

           {{-- Service Getting Process --}}
           <section class="py-16 container center flex-col gap-6">
               <h3 class="h3 text-primary text-center font-bold">
                   {{ app()->getLocale() == 'zh' ? '服务获取流程' : 'Service Getting Process' }}
               </h3>

               <ol class="list-decimal space-y-4">
                   <h5 class="h6 font-semibold mb-3 underline">
                       {{ app()->getLocale() == 'zh' ? '与 Apex Scrap 合作很简单：' : 'Working with Apex Scrap is simple:' }}
                   </h5>
                   <li><b>{{ app()->getLocale() == 'zh' ? '咨询' : 'Inquiry' }}</b> –
                       {{ app()->getLocale() == 'zh' ? '告诉我们您需要的材料' : 'Tell us what materials you need' }}</li>
                   <li><b>{{ app()->getLocale() == 'zh' ? '报价' : 'Quotation' }}</b> –
                       {{ app()->getLocale() == 'zh' ? '获得透明且有竞争力的报价' : 'Receive a transparent, competitive offer' }}</li>
                   <li><b>{{ app()->getLocale() == 'zh' ? '物流' : 'Logistics' }}</b> –
                       {{ app()->getLocale() == 'zh' ? '我们处理出口、文件与运输' : 'We handle export, documentation & shipping' }}
                   </li>
                   <li><b>{{ app()->getLocale() == 'zh' ? '交付' : 'Delivery' }}</b> –
                       {{ app()->getLocale() == 'zh' ? '按时交付并保证质量' : 'On-time delivery with quality assurance' }}</li>
               </ol>

               <div class="center flex-col pt-10 gap-4">
                   <p class="text-lg font-semibold">
                       {{ app()->getLocale() == 'zh' ? '您提出需求，我们全球交付。' : 'You request, we deliver—worldwide.' }}</p>


                   <a href="/contact#msg-us">
                       <button
                           class="bg-third text-secondary rounded-3xl px-8 py-2 border-8 border-primary shadow-2xl btn-hover font-semibold">
                           {{ app()->getLocale() == 'zh' ? '联系我们' : 'Contact Us' }}
                       </button>
                   </a>
               </div>
           </section>



       @endsection
