 @extends('frontend.layouts.app')

 @section('title', 'Apex-Scrap Ask any Question')

 @section('content')

     {{-- banner --}}
     <section class="relative center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
         style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

         {{-- Dark overlay --}}
         <div class="absolute inset-0 bg-black opacity-70"></div>

         <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
             <h1 class="h2 font-bold">
                 <span class="text-third">{{ app()->getLocale() == 'zh' ? '提出任何问题' : 'Ask Questions' }}</span>
             </h1>
             <p class="w-full text-white text-center">
                 {{ app()->getLocale() == 'zh' ? '如果您有任何问题，请提问。' : 'Have any question in your mind, please ask' }}
             </p>
         </div>
     </section>


     {{-- Ask any question section --}}
     <section class="py-16">

         <h3 class="h3 text-primary text-center font-bold"> Have any questions ? </h3>
         <p class="p text-center"> If you have any query please feel free to ask. </p>

         {{-- show message --}}
         <div class="container pt-4">
             @if (session('success'))
                 <div role="alert" class="alert alert-success alert-outline alert-soft">
                     {{ session('success') }}
                 </div>
             @endif


             @if (session('error'))
                 <div role="alert" class="alert alert-error alert-outline alert-soft">
                     {{ session('error') }}
                 </div>
             @endif

             @if ($errors->any())
                 <div role="alert" class="alert alert-error alert-outline alert-soft">
                     <ul class="list-disc pl-5">
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif
         </div>

         <div class="">
             <form action="{{ route('sendAskQuestion') }}" method="POST" class="max-w-2xl mx-auto space-y-6">
                 @csrf
                 <div>
                     <label for="name" class="block font-medium mb-1">Full Name</label>
                     <input type="text" id="name" name="name" value="{{ old('name') }}"
                         class="w-full border border-green-800 rounded-lg px-4 py-2" required>
                 </div>

                 <div>
                     <label for="email" class="block font-medium mb-1">Email Address</label>
                     <input type="email" id="email" name="email" value="{{ old('email') }}"
                         class="w-full border border-green-800 rounded-lg px-4 py-2" required>
                 </div>

                 <div>
                     <label for="subject" class="block font-medium mb-1">Subject</label>
                     <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                         class="w-full border border-green-800 rounded-lg px-4 py-2" required>
                 </div>

                 <div>
                     <label for="message" class="block font-medium mb-1">Message</label>
                     <textarea id="message" name="message" rows="5" class="w-full border border-green-800 rounded-lg px-4 py-2"
                         required>{{ old('message') }}</textarea>
                 </div>

                 <div class="text-center">
                     <button type="submit"
                         class="bg-primary text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                         Send Message
                     </button>
                 </div>
             </form>
         </div>

     </section>



 @endsection
