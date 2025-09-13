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
                       <span>Our</span> <span class="text-third">Services</span>
                   </h1>
                   <p class="w-full md:w-5/6 text-white text-center">
                       Apex Scrap, we go beyond supplying scrap—we deliver tailored solutions for global industries. Whether
                       you’re an international buyer, a business partner, or a large-scale industry, our services are
                       designed to ensure reliability, transparency, and long-term value.
                   </p>
               </div>
           </section>


           {{-- Your Scrap, Our Global Reach.  --}}
           <section class="bg-gray-200 py-16">

               <div class="container grid md:grid-cols-2 grid-cols-1 gap-6">


                   <div class="col-span-1 flex flex-col gap-4">
                       <h3 class="h3 text-primary font-bold"> Your Scrap, Our Global Reach. </h3>
                       <h4 class="h4 font-bold"> B2G – Business to Global </h4>
                       <p class="p">
                           We specialize in exporting recycled scrap materials to clients worldwide. Our strong logistics
                           and compliance expertise allow us to deliver materials seamlessly across Asia, the Middle East,
                           Africa, Europe, and the Americas
                       </p>


                       <p class="font-bold"> What you get: </p>
                       <ul class="ms-5">
                           <li class="list-disc">Access to global supply & export channels</li>
                           <li class="list-disc">International-grade quality assurance</li>
                           <li class="list-disc">Smooth documentation & customs handling</li>
                           <li class="list-disc"> Timely, safe, and reliable delivery </li>
                       </ul>

                       <p class="text-primary p">
                           Perfect for international industries and global procurement managers seeking consistent scrap
                           supply.
                       </p>
                   </div>

                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-1.jpg') }}" alt="about-1" class="rounded-2xl shadow-2xl">
                   </div>

               </div>

               <div>

               </div>

           </section>




           {{-- Strong Partnerships and Reliable Supply. --}}
           <section class="py-16">

               <div class="container grid md:grid-cols-2 grid-cols-1 gap-6">

                   <div class="col-span-1 center">
                       <img src="{{ asset('/frontend/images/about-2.jpg') }}" alt="about-1" class="rounded-2xl shadow-2xl">
                   </div>


                   <div class="col-span-1 flex flex-col  gap-4 px-3">
                       <h3 class="h3 text-primary font-bold text-start"> Strong Partnerships and Reliable Supply. </h3>
                       <h4 class="h4 font-bold"> B2B – Business to Business </h4>

                       <p class="p">
                           We work directly with manufacturers, smelters, foundries, and recyclers to provide high-quality
                           ferrous, non-ferrous, and electronic scrap materials.
                       </p>


                       <p class="font-bold"> What you get: </p>
                       <ul class="ms-5">
                           <li class="list-disc">Transparent, competitive pricing</li>
                           <li class="list-disc"> Regular and consistent supply volumes </li>
                           <li class="list-disc"> Customized scrap solutions based on your industry needs </li>
                           <li class="list-disc"> Dedicated support for long-term contracts </li>
                       </ul>

                       <p class="text-primary p">
                           Ideal for businesses looking for a trusted, consistent scrap supplier.
                       </p>
                   </div>



               </div>





               <div>

               </div>





           </section>


           {{-- Big Orders, Bigger Value.  --}}
           <section class="bg-gray-200 py-16">

               <div class="container grid md:grid-cols-2 grid-cols-1 gap-6">


                   <div class="col-span-1 flex flex-col gap-4">
                       <h3 class="h3 text-primary font-bold"> Big Orders, Bigger Value. </h3>
                       <h4 class="h4 font-bold"> Bulk Partners </h4>
                       <p class="p">
                           For large-scale buyers and industries, we provide bulk scrap supply solutions—helping you cut
                           costs and secure reliable material flow for your operations.
                       </p>


                       <p class="font-bold"> What you get: </p>
                       <ul class="ms-5">
                           <li class="list-disc">Bulk order discounts & flexible pricing models</li>
                           <li class="list-disc">Priority logistics & faster delivery slots</li>
                           <li class="list-disc">Dedicated account management</li>
                           <li class="list-disc"> Tailored contracts for volume stability</li>
                       </ul>

                       <p class="text-primary p">
                           Best suited for large manufacturers, steel mills, and global buyers seeking steady, large-volume
                           scrap supply.
                       </p>
                   </div>

                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-1.jpg') }}" alt="about-1" class="rounded-2xl shadow-2xl">
                   </div>

               </div>

               <div>

               </div>

           </section>



           {{-- Service Getting Process  --}}
           <section class="py-16 container center flex-col gap-6">

               <h3 class="h3 text-primary text-center font-bold"> Service Getting Process </h3>



               <ol class="list-decimal space-y-4">
                   <h5 class="h6 font-semibold mb-3 underline"> Working with Apex Scrap is simple: </h5>
                   <li> <b>Inquiry</b> – Tell us what materials you need </li>
                   <li> <b>Quotation</b> – Receive a transparent, competitive offer </li>
                   <li> <b> Logistics </b> – We handle export, documentation & shipping </li>
                   <li> <b>Delivery</b> – On-time delivery with quality assurance </li>
               </ol>

               <div class="center flex-col pt-10 gap-4">
                   <p class="text-lg font-semibold"> You request, we deliver—worldwide. </p>

                   <button class="bg-teal-400 border-2 border-primary rounded-2xl px-8 py-2 btn-hover">
                       Contact Us
                   </button>
               </div>


           </section>



       @endsection
