       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap About')

       @section('content')

           {{-- banner --}}
           <section class="relative center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
               style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">
               <div class="absolute inset-0 bg-black opacity-70"></div>

               <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
                   <h1 class="h2">
                       <span class="font-bold">{{ app()->getLocale() == 'zh' ? '关于' : 'About' }}</span>
                       <span class="text-third">Apex Scrap</span>
                   </h1>
                   <p class="w-full md:w-2/3 text-white text-center">
                       {{ app()->getLocale() == 'zh'
                           ? '15年来，我们一直引领可持续金属回收行业，致力于环境责任与客户满意度。'
                           : 'Leading the way in sustainable metal recycling for over 15 years. Committed to environmental responsibility and customer satisfaction.' }}
                   </p>
               </div>
           </section>



           {{-- About --}}
           <section class="bg-gray-200 py-16">
               <div class="container grid md:grid-cols-3 grid-cols-1 gap-6">
                   <div class="col-span-2 flex flex-col gap-4 px-3">
                       <h3 class="h3 text-primary font-bold">{{ app()->getLocale() == 'zh' ? '关于我们' : 'About' }}</h3>
                       <p class="p">
                           {{ app()->getLocale() == 'zh'
                               ? 'Apex Scrap 是全球值得信赖的废料出口商，专注于金属、电子产品及工业材料。凭借多年经验、强大的物流能力和可持续发展承诺，我们将废料转化为全球产业的机遇。'
                               : 'Apex Scrap is a trusted global scrap exporter specializing in metals, electronics, and industrial materials. With years of expertise, strong logistics, and a commitment to sustainability, we turn waste into opportunity for industries around the world.' }}
                       </p>
                       <ul class="ms-5">
                           <li class="list-disc">{{ app()->getLocale() == 'zh' ? '全球出口专业知识' : 'Global Export Expertise' }}
                           </li>
                           <li class="list-disc">{{ app()->getLocale() == 'zh' ? '环保实践' : 'Eco-Friendly Practices' }}</li>
                           <li class="list-disc">{{ app()->getLocale() == 'zh' ? '可靠的供应链' : 'Reliable Supply Chain' }}</li>
                           <li class="list-disc">{{ app()->getLocale() == 'zh' ? '具有竞争力的价格' : 'Competitive Pricing' }}</li>
                       </ul>
                   </div>
                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-1.webp') }}" alt="about-1" class="rounded-2xl shadow-2xl" loading="lazy">
                   </div>
               </div>
           </section>



           {{-- Why Work With Us --}}
           <section class="py-16">
               <div class="container grid md:grid-cols-3 grid-cols-1 gap-6">
                   <div class="col-span-1 order-2 md:order-1">
                       <img src="{{ asset('/frontend/images/about-2.webp') }}" alt="about-2"
                           class="rounded-2xl shadow-2xl" loading="lazy">
                   </div>

                   <div class="col-span-2 flex flex-col items-end gap-4 px-3 order-1 md:order-2">
                       <h3 class="h3 text-primary font-bold text-start">
                           {{ app()->getLocale() == 'zh' ? '为什么选择 Apex Scrap ?' : 'Why Work With Apex Scrap ?' }}
                       </h3>
                       <ul class="ms-5">
                           <li class="list-disc">
                               <b>{{ app()->getLocale() == 'zh' ? '可信赖的供应商' : 'Trusted Supplier' }}</b> –
                               {{ app()->getLocale() == 'zh' ? '稳定的质量与分级标准' : 'Consistent quality & grading standards' }}
                           </li>
                           <li class="list-disc">
                               <b>{{ app()->getLocale() == 'zh' ? '全球覆盖' : 'Global Reach' }}</b> –
                               {{ app()->getLocale() == 'zh' ? '按时发货至国际市场' : 'On-time shipping across international markets' }}
                           </li>
                           <li class="list-disc">
                               <b>{{ app()->getLocale() == 'zh' ? '可持续发展驱动' : 'Sustainability Driven' }}</b> –
                               {{ app()->getLocale() == 'zh' ? '支持循环经济' : 'Supporting the circular economy' }}
                           </li>
                           <li class="list-disc">
                               <b>{{ app()->getLocale() == 'zh' ? '以客户为中心' : 'Customer-Centric' }}</b> –
                               {{ app()->getLocale() == 'zh' ? '为您的业务需求提供定制化解决方案' : 'Tailored solutions for your business needs' }}
                           </li>
                       </ul>
                   </div>
               </div>
           </section>


           {{-- Meet Our Team --}}

           <section class="py-16 bg-gray-200">
               <div class="container">

                   <div class="center flex-col gap-3">
                       <h3 class="h3 font-bold text-primary text-center">
                           {{ app()->getLocale() == 'zh' ? '认识我们的团队' : 'Meet Our Team' }}
                       </h3>
                       <p class="p text-center w-full md:w-2/3">
                           {{ app()->getLocale() == 'zh'
                               ? '我们经验丰富的专业团队致力于为您提供最佳服务和金属回收专业知识。'
                               : 'Our experienced professionals are dedicated to providing you with the best service and expertise in metal recycling.' }}
                       </p>
                   </div>



                   <div class="flex-col md:flex-row flex justify-evenly mt-8">

                       <div class="center flex-col gap-1">
                           <img src="{{ asset('/frontend/images/team-1.png') }}" alt="team-image" loading="lazy"
                               class="h-32 w-32 rounded-full">
                           <h6 class="h6 font-semibold"> Mr. Faridul </h6>
                           <p class="text-primary"> Founder & CEO </p>
                       </div>
                       <div class="center flex-col gap-1">
                           <img src="{{ asset('/frontend/images/team-2.png') }}" alt="team-image" loading="lazy"
                               class="h-32 w-32 rounded-full">
                           <h6 class="h6 font-semibold"> Mr. Barik Zia </h6>
                           <p class="text-primary"> Operations Manager </p>
                       </div>
                       <div class="center flex-col gap-1">
                           <img src="{{ asset('/frontend/images/team-1.png') }}" alt="team-image" loading="lazy"
                               class="h-32 w-32 rounded-full">
                           <h6 class="h6 font-semibold"> Sheikh Hossain </h6>
                           <p class="text-primary"> Operations Manager </p>
                       </div>

                   </div>




               </div>
           </section>


           {{-- How It Works --}}
           <section class="py-16 container">
               <div class="center flex-col gap-3">
                   <h3 class="h3 font-bold text-center text-primary">
                       {{ app()->getLocale() == 'zh' ? '操作流程' : 'How It Works' }}
                   </h3>
                   <p class="text-secondary w-full md:w-2/3 text-center">
                       {{ app()->getLocale() == 'zh'
                           ? '我们的简单四步流程让回收废金属变得轻松且有利可图。'
                           : 'Our simple 4-step process makes recycling your scrap metal easy and profitable.' }}
                   </p>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-3 gap-y-8 mt-12">
                   {{-- Step 1 --}}
                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white">1</h4>
                       </div>
                       <h6 class="h6">{{ app()->getLocale() == 'zh' ? '联系我们' : 'Connect with Us' }}</h6>
                       <p class="text-center w-2/3 md:w-full">
                           {{ app()->getLocale() == 'zh'
                               ? '通过电话或在线表格获取报价并安排上门收取。'
                               : 'Call or fill out our online form to get a quote and schedule pickup.' }}
                       </p>
                   </div>

                   {{-- Step 2 --}}
                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white">2</h4>
                       </div>
                       <h6 class="h6">{{ app()->getLocale() == 'zh' ? '评估材料' : 'We Evaluate' }}</h6>
                       <p class="text-center w-2/3 md:w-full">
                           {{ app()->getLocale() == 'zh'
                               ? '我们的团队评估您的材料并提供透明报价。'
                               : 'Our team assesses your materials and provides transparent pricing.' }}
                       </p>
                   </div>

                   {{-- Step 3 --}}
                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white">3</h4>
                       </div>
                       <h6 class="h6">{{ app()->getLocale() == 'zh' ? '收集废料' : 'We Collect' }}</h6>
                       <p class="text-center w-2/3 md:w-full">
                           {{ app()->getLocale() == 'zh'
                               ? '专业收取，配备适当设备和安全规范。'
                               : 'Professional pickup with proper equipment and safety protocols.' }}
                       </p>
                   </div>

                   {{-- Step 4 --}}
                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white">4</h4>
                       </div>
                       <h6 class="h6">{{ app()->getLocale() == 'zh' ? '获取付款' : 'You Get Paid' }}</h6>
                       <p class="text-center w-2/3 md:w-full">
                           {{ app()->getLocale() == 'zh'
                               ? '收取废料后立即付款并提供详细收据。'
                               : 'Immediate payment upon collection with detailed receipts.' }}
                       </p>
                   </div>
               </div>

               <div class="center pt-10">
                   <a href="/contact#msg-us">
                       <button
                           class="bg-third text-secondary rounded-3xl px-8 py-2 border-8 border-primary shadow-2xl btn-hover font-semibold">
                           {{ app()->getLocale() == 'zh' ? '立即开始' : 'Get Started Today' }}
                       </button>
                   </a>
               </div>
           </section>



       @endsection
