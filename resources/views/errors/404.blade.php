       @extends('frontend.layouts.app')

       @section('title', 'Apex-Scrap Home')

       @section('content')

           <div class="bg-gray-100 flex items-center justify-center min-h-[80vh]">
               <div class="text-center container">
                   <h1 class="text-9xl font-bold text-green-800">404</h1>
                   <h2 class="text-3xl font-semibold text-gray-700 mb-4">Oops! Page Not Found</h2>
                   <p class="text-gray-500 mb-6">The page you are looking for doesn't exist or has been moved.</p>
                   <a href="{{ url('/') }}" class="px-6 py-3 bg-green-800 text-white rounded-lg btn-hover">Go
                       Home</a>
               </div>
           </div>

       @endsection
