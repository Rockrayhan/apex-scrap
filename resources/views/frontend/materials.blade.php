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
                 <span>Our</span> <span class="text-third">Materials</span>
             </h1>
             <p class="w-full md:w-5/6 text-white text-center">
                 Apex Scrap, we go beyond supplying scrap—we deliver tailored solutions for global industries. Whether
                 you’re an international buyer, a business partner, or a large-scale industry, our services are designed to
                 ensure reliability, transparency, and long-term value.
             </p>
         </div>
     </section>



     {{-- Ferrous Metals --}}
     <section class="py-16 bg-gray-200">

         <div class="container">

             <div class="center flex-col">
                 <h3 class="h3 text-primary font-bold py-6"> Ferrous Metals </h3>

                 <p class="p w-full md:w-2/3">
                     Ferrous metals are the backbone of industrial manufacturing, valued for their strength, durability, and
                     versatility. They are widely used in construction, automotive, shipbuilding, and heavy machinery. At
                     Apex
                     Scrap, we supply high-quality ferrous scrap that meets international standards and supports industries
                     worldwide.
                 </p>
             </div>

             <div class="grid grid-cols-1 md:grid-cols-3 mt-8 md:mt-16 gap-y-6">

                 <div class="col-span-1">
                     <h6 class="h6 font-bold "> We Supply : </h6>
                     <ul class="list-disc ms-5">
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                     </ul>
                 </div>
                 <div class="col-span-2">
                     <div class="grid grid-cols-2 md:grid-cols-4 gap-x-2 gap-y-4">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                     </div>
                 </div>

             </div>

         </div>
     </section>

     {{-- Non-Ferrous Metals --}}
     <section class="py-16">

         <div class="container">

             <div class="center flex-col">
                 <h3 class="h3 text-primary font-bold py-6"> Non Ferrous Metals </h3>

                 <p class="p w-full md:w-2/3">
                     Non-ferrous metals are corrosion-resistant, lightweight, and hold high market value across multiple
                     industries. They are essential in electrical, aerospace, automotive, and packaging sectors. Apex Scrap
                     provides premium-grade non-ferrous scrap, ensuring reliable supply for smelters, refiners, and
                     recyclers globally.
                 </p>
             </div>

             <div class="grid grid-cols-1 md:grid-cols-3 mt-8 md:mt-16 gap-y-6">

                 <div class="col-span-1">
                     <h6 class="h6 font-bold "> We Supply : </h6>
                     <ul class="list-disc ms-5">
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                         <li> Iron Scrap </li>
                     </ul>
                 </div>
                 <div class="col-span-2">
                     <div class="grid grid-cols-4 gap-x-2 gap-y-4">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                         <img src="{{ asset('/frontend/images/metal-1.jpg') }}" alt="" class="h-30 w-30">
                     </div>
                 </div>

             </div>

         </div>
     </section>


     {{-- Catalytic Converters --}}
     <section class="py-16 bg-gray-200">
         <div class="container grid grid-cols-1 md:grid-cols-3 gap-y-6">
             <div class="col-span-2 flex flex-col justify-center gap-10 pe-4">
                 <h3 class="text-primary h3"> <b>Special Materials</b> Catalytic Converters </h3>

                 <p class="p">
                     Special materials include high-demand scraps that power modern industries and sustainable recycling.
                     These materials are critical for renewable energy, technology, and advanced manufacturing. At Apex
                     Scrap, we source and supply certified special materials, ensuring traceability and quality compliance.
                 </p>
             </div>

             <div class="col-span-1">
                 <img src="/frontend/images/metal-1.jpg" alt="">
             </div>

         </div>
     </section>



     {{-- Ready to Turn Your Scrap Into Cash? --}}
     <section class="py-16 container center flex-col gap-6">

         <h3 class="h3 font-bold"> Ready to Turn Your Scrap <span class="text-primary">Into Cash?</span> </h3>

         <p class="p w-full md:w-2/3 text-center">
             Get a free quote today and discover how much your scrap metal is worth. We offer competitive prices and
             professional service.
         </p>

         <div class="flex flex-col items-center md:flex-row md:justify-start gap-6">
             <button class="bg-teal-400 rounded-3xl px-8 py-2 btn-hover">
                 Get Started Today
             </button>
             <button class="border-3 border-teal-400 text-teal-400 rounded-3xl px-8 py-2 btn-hover">
                 Cell +31000000099
             </button>
         </div>


     </section>

 @endsection
