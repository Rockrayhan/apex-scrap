       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap We are')

       @section('content')

           {{-- banner --}}
           <section class="relative center min-h-[30vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
               style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

               {{-- Dark overlay --}}
               <div class="absolute inset-0 bg-black opacity-70"></div>

               <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
                   <h1 class="h2">
                       <span class="font-bold">About</span> <span class="text-third">Apex Scrap</span>
                   </h1>
                   <p class="w-full md:w-2/3 text-white text-center">
                       Leading the way in sustainable metal recycling for over 15 years. Committed to environmental
                       responsibility and customer satisfaction.
                   </p>
               </div>
           </section>


           {{-- About  --}}
           <section class="bg-gray-200 py-16">

               <div class="container grid md:grid-cols-3 grid-cols-1 gap-6">


                   <div class="col-span-2 flex flex-col gap-4 px-3">
                       <h3 class="h3 text-primary font-bold"> About </h3>
                       <p class="p">
                           Apex Scrap is a trusted global scrap exporter specializing in metals, electronics, and
                           industrial
                           materials. With years of expertise, strong logistics, and a commitment to sustainability, we
                           turn
                           waste into opportunity for industries around the world
                       </p>

                       <ul class="ms-5">
                           <li class="list-disc">Global Export Expertise</li>
                           <li class="list-disc">Eco-Friendly Practices</li>
                           <li class="list-disc">Reliable Supply Chain</li>
                           <li class="list-disc">Competitive Pricing</li>
                       </ul>
                   </div>

                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-1.jpg') }}" alt="about-1" class="rounded-2xl shadow-2xl">
                   </div>

               </div>





               <div>

               </div>





           </section>

           {{-- why work with us --}}
           <section class="py-16">

               <div class="container grid md:grid-cols-3 grid-cols-1 gap-6">

                   <div class="col-span-1">
                       <img src="{{ asset('/frontend/images/about-2.jpg') }}" alt="about-1" class="rounded-2xl shadow-2xl">
                   </div>


                   <div class="col-span-2 flex flex-col items-end  gap-4 px-3">
                       <h3 class="h3 text-primary font-bold text-start"> Why Work With Apex Scrap ? </h3>

                       <ul class="ms-5">
                           <li class="list-disc"> <b>Trusted Supplier</b> – Consistent quality & grading standards</li>
                           <li class="list-disc"><b>Global Reach</b> – On-time shipping across international markets</li>
                           <li class="list-disc"> <b>Sustainability Driven</b> – Supporting the circular economy</li>
                           <li class="list-disc"> <b>Customer-Centric</b> – Tailored solutions for your business needs </li>
                       </ul>
                   </div>



               </div>





               <div>

               </div>





           </section>


           {{-- how it works --}}
           <section class="py-16 container">

               <div class="center flex-col gap-3">

                   <h3 class="h3 font-bold text-center text-primary"> How It Works </h3>

                   <p class="text-secondary w-full md:w-2/3 text-center">Our simple 4-step process makes recycling your
                       scrap metal easy and profitable.</p>

               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-3 gap-y-8 mt-12">

                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white"> 1 </h4>
                       </div>

                       <h6 class="h6"> Connected us </h6>

                       <p class="text-center w-2/3 md:w-full">
                           Call or fill out our online form to get a quote and schedule pickup.
                       </p>

                   </div>


                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white"> 2 </h4>
                       </div>

                       <h6 class="h6"> We Evaluate </h6>

                       <p class="text-center w-2/3 md:w-full">
                         Our team assesses your materials and provides transparent pricing.
                       </p>

                   </div>


                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white"> 3 </h4>
                       </div>

                       <h6 class="h6"> We Collect </h6>

                       <p class="text-center w-2/3 md:w-full">
                           Professional pickup with proper equipment and safety protocols.
                       </p>

                   </div>



                   <div class="center flex-col gap-2.5">
                       <div class="bg-primary rounded-full h-[60px] w-[60px] center p-3">
                           <h4 class="h4 font-bold text-white"> 4 </h4>
                       </div>

                       <h6 class="h6"> You Get Paid </h6>

                       <p class="text-center w-2/3 md:w-full">
                           Immediate payment upon collection with detailed receipts.
                       </p>

                   </div>

               </div>

               <div class="center pt-10">
                 <button class="bg-third text-secondary rounded-3xl px-8 py-2 border-8 border-primary shadow-2xl btn-hover">
                        Get Started Today
                    </button>
               </div>



           </section>



       @endsection
