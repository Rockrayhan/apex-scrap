       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap We are')

       @section('content')

           {{-- banner --}}
           <section class="relative center min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
               style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

               {{-- Dark overlay --}}
               <div class="absolute inset-0 bg-black opacity-70"></div>

               <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl">
                   <h1 class="h2">
                       <span class="font-bold">About</span> Apex Scrap
                   </h1>
               </div>
           </section>


           {{-- page body --}}
           <section>

               <div class="grid md:grid-cols-3 grid-cols-1 container py-12">

                   <div class="col-span-1">
                       <h3 class="h2"> Sell High-Quality </h3>
                       <h4 class="h3"> Recycle Scrap </h4>
                   </div>
                   <div class="col-span-2">
                       <p class="p">
                           Apex Scrap, we are more than a scrap supplier—we are a global trading partner. Our mission is to
                           transform discarded materials into valuable resources, connecting industries with reliable,
                           sustainable, and profitable scrap solutions.
                       </p>
                   </div>


               </div>


               <div class="py-12">
                   <h3 class="h3 text-primary text-center font-bold"> Service Process </h3>
               </div>


               <div class="py-12">
                   <h3 class="h3 text-primary text-center font-bold"> Business Goal </h3>
               </div>


               <div class="py-12">
                   <h3 class="h3 text-primary text-center font-bold"> Certifications </h3>
               </div>


               <div class="py-12">
                   <h3 class="h3 text-primary text-center font-bold"> Business Express </h3>
               </div>



           </section>





       @endsection
