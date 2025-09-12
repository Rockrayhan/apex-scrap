       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap Home')

       @section('content')



           {{-- home banner --}}
           <section class="relative flex justify-center  min-h-[70vh]  bg-black/40 bg-cover bg-no-repeat bg-center"
               style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

               {{-- Dark overlay --}}
               <div class="absolute inset-0 bg-black opacity-50"></div>

               <div class="relative z-10 text-white px-5 md:px-10 flex flex-col gap-10 md:gap-15  mt-30 text-center">
                   <h1 class="h2 font-bold">
                       Turning Scrap Into Global Value
                   </h1>
                   <h1 class="h3">
                       Free Material Pricing
                       <br>
                       <a href="tel:(313) 365-6100" class="underline"> (313) 365-6100 </a>
                   </h1>

               </div>
           </section>

           {{-- business area --}}
           <div class="bg-primary mx-8 -mt-5 relative z-90 ">
               <div
                   class="h4 container mx-auto flex flex-col md:flex-row md:items-center md:justify-between text-white py-3 px-4">

                   {{-- Left Side - Title --}}
                   <div class="font-semibold mb-2 md:mb-0">
                       Business Areas
                   </div>

                   {{-- Right Side - Countries --}}
                   <div class="flex flex-wrap gap-5 ">
                       <span class="hover:text-gray-200 cursor-pointer">China</span>
                       <span class="hover:text-gray-200 cursor-pointer">Singapore</span>
                       <span class="hover:text-gray-200 cursor-pointer">Japan</span>
                       <span class="hover:text-gray-200 cursor-pointer">Dubai</span>
                       <span class="hover:text-gray-200 cursor-pointer">Turkey</span>
                   </div>
               </div>
           </div>



           {{-- we are --}}
           <section class="py-16 container grid grid-cols-1 md:grid-cols-2 gap-5">

               <div class="flex flex-col gap-3 p-2">
                   <h3 class="h3 text-primary font-semibold"> We Are </h3>

                   <hr class="border-b border-green-800">

                   <h6 class="h6">
                       Apex Scrap, we supply high-quality recycled scrap materials to industries worldwide.
                   </h6>
                   <p class="p">
                       From metals to electronics, we deliver reliable, sustainable, and profitable solutions for your
                       business.
                   </p>

                   <div class="flex gap-12">


                       <div class="relative center  bg-black/40 bg-cover bg-no-repeat bg-center"
                           style="background-image: url('{{ asset('/frontend/images/banner2.webp') }}')">

                           <div class="absolute inset-0 bg-teal-800 opacity-80"></div>

                           <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl">
                               <h3 class="h3 font-bold">
                                   USA Base
                                   <br>
                                   Global
                                   <br>
                                   Exporter
                               </h3>
                           </div>
                       </div>

                       <div class="flex flex-col gap-10">
                           <ul class="list-disc">
                               <li> Global Export Expertise </li>
                               <li> Global Export Expertise </li>
                               <li> Global Export Expertise </li>
                               <li> Global Export Expertise </li>
                           </ul>

                           <button class="btn-primary">
                               Read More
                           </button>


                       </div>
                   </div>


               </div>

               <div class="relative inline-block cursor-pointer group"
                   onclick="document.getElementById('video_modal').showModal()">
                   {{-- Background Image --}}
                   <img src="{{ asset('/frontend/images/banner2.webp') }}" alt="" class="w-full h-auto">

                   {{-- Play Icon --}}
                   <img src="{{ asset('/frontend/images/play-icon.svg') }}" alt="Play"
                       class="absolute -top-2 right-0 w-18 h-18 border-b-5 border-l-5 border-white p-4 
                transition-transform duration-300 ease-in-out group-hover:scale-120">
               </div>




               {{-- DaisyUI Modal --}}
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
                               <button class="btn">Close</button>
                           </form>
                       </div>
                   </div>

                   {{-- This makes it close on outside click --}}
                   <form method="dialog" class="modal-backdrop">
                       <button>close</button>
                   </form>
               </dialog>


           </section>



           {{-- What we sell --}}

           <section class="py-16 container">

               <div class="center flex-col gap-4 py-6">
                   <div class="center gap-3">
                       <hr class="border-b-2 border-green-800 w-28">
                       <h3 class="h3 text-primary font-bold"> What We Sell </h3>
                       <hr class="border-b-2 border-green-800 w-28">
                   </div>

                   <p class="text-center w-full md:w-2/3">
                       We specialize in sourcing and supplying premium recycled scrap materials to meet the needs of
                       manufacturers, smelters, and industrial buyers globally.
                   </p>

               </div>



               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                   <div class="flex flex-col gap-4">

                       <img src="{{ asset('/frontend/images/cat-1.png') }}" alt="">

                       <h4 class="h4 font-semibold"> Ferrous Metals </h4>

                       <p>
                           Now you can sell any old household metal items, including old appliances, cast iron sinks, and
                           tubs.
                       </p>

                       <div>
                           <button
                               class="border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 cursor-pointer group">
                               <span>See More</span>
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                   stroke="currentColor"
                                   class="size-4 transition-all duration-300 ease-in-out group-hover:translate-x-1">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                               </svg>
                           </button>



                       </div>

                   </div>


                   <div class="flex flex-col gap-4">

                       <img src="{{ asset('/frontend/images/cat-2.png') }}" alt="">

                       <h4 class="h4 font-semibold"> Non-Ferrous Metals </h4>

                       <p>
                           Now you can sell any old household metal items, including old appliances, cast iron sinks, and
                           tubs.
                       </p>

                       <div>
                           <button
                               class="relative border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 cursor-pointer group">

                               <span class="relative">
                                   See More
                                   <!-- Animated underline -->
                                   <span
                                       class="absolute left-0 bottom-0 w-0 h-[1.5px] bg-green-800 transition-all duration-300 ease-in-out group-hover:w-full">
                                   </span>
                               </span>

                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                   stroke="currentColor"
                                   class="size-4 transition-transform duration-300 group-hover:translate-x-1">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                               </svg>
                           </button>


                       </div>

                   </div>



                   <div class="flex flex-col gap-4">

                       <img src="{{ asset('/frontend/images/cat-1.png') }}" alt="">

                       <h4 class="h4 font-semibold"> Catalytic Converters </h4>

                       <p>
                           Now you can sell any old household metal items, including old appliances, cast iron sinks, and
                           tubs.
                       </p>

                       <div>
                           <button
                               class="relative border-3 border-green-800 px-4 py-1 text-primary flex items-center gap-2.5 cursor-pointer group">

                               <span class="relative">
                                   See More
                                   <!-- Animated underline -->
                                   <span
                                       class="absolute left-0 bottom-0 w-0 h-[1.5px] bg-green-800 transition-all duration-300 ease-in-out group-hover:w-full">
                                   </span>
                               </span>

                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                   stroke-width="1.5" stroke="currentColor"
                                   class="size-4 transition-transform duration-300">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                               </svg>
                           </button>


                       </div>

                   </div>


               </div>

           </section>





           {{-- Blog section --}}
           <section class="container py-16">
               <h2 class="text-lg font-semibold mb-4">
                   {{ app()->getLocale() == 'zh' ? '这里有所有 (' . count($blogs) . ') 篇博客' : 'Here are all (' . count($blogs) . ') blogs' }}
               </h2>
               <div class="flex flex-wrap gap-6">
                   @foreach ($blogs as $blog)
                       <div
                           class="card w-72 bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow">
                           <div class="card-body p-4">
                               {{-- Title --}}
                               <h4 class="text-lg font-semibold mb-2">{{ $blog->title }}</h4> {{-- Accessor --}}

                               {{-- Meta --}}
                               <p class="text-sm text-gray-600 mb-2">
                                   {{ app()->getLocale() == 'zh' ? '作者' : 'Author' }}:
                                   <span class="font-medium">{{ $blog->author }}</span>
                                   |
                                   {{ app()->getLocale() == 'zh' ? '分类' : 'Category' }}:
                                   <span class="font-medium">{{ $blog->category }}</span>
                               </p>

                               {{-- Image --}}
                               @if ($blog->image)
                                   <img src="{{ asset($blog->image) }}" class="w-full h-40 object-cover rounded mb-3">
                               @endif

                               {{-- Description --}}
                               <p class="text-sm text-gray-700 mb-3">{!! $blog->description !!}</p> {{-- Accessor --}}

                               {{-- Featured --}}
                               <small class="text-gray-500">
                                   {{ app()->getLocale() == 'zh' ? '主页推荐:' : 'Featured:' }}
                                   <span class="font-medium">
                                       {{ $blog->featured_in_home ? (app()->getLocale() == 'zh' ? '是' : 'Yes') : (app()->getLocale() == 'zh' ? '否' : 'No') }}
                                   </span>
                               </small>
                           </div>
                       </div>
                   @endforeach
               </div>

           </section>


       @endsection
