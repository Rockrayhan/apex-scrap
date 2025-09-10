       @extends('frontend.layouts.app')

       @section('title', 'Home')

       @section('content')


           <div class="container">


               {{-- Heading --}}
               <h1 class="text-2xl font-bold text-center bg-blue-100 p-4 rounded-lg mb-6">
                   {{ app()->getLocale() == 'zh' ? '欢迎来到我们的主页' : 'Welcome to our home page' }}
               </h1>

               {{-- Blog count --}}
               <h2 class="text-lg font-semibold mb-4">
                   {{ app()->getLocale() == 'zh' ? '这里有所有 (' . count($blogs) . ') 篇博客' : 'Here are all (' . count($blogs) . ') blogs' }}
               </h2>

               {{-- Blog list --}}
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

           </div>


       @endsection
