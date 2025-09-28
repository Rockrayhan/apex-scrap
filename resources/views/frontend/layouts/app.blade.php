<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/frontend/images/favicon.png') }}" type="image/x-icon">
    <title>Apex Scrap</title>

    {{-- DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    {{-- Tailwind CSS --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('/frontend/style.css') }}">

    {{-- slice js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>





<body>
    <header class="mb-[6.5rem] md:mb-[8rem]">

        <div class="fixed top-0 z-[1000] w-full">
            {{-- Language Switch - top nav --}}
            <div class="bg-primary text-white  py-3 ">
                <div class="container flex justify-end gap-10 ">

                    <div>
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="hover:underline {{ app()->getLocale() == 'en' ? 'font-bold' : '' }}">
                            EN
                        </a> |

                        <a href="{{ route('lang.switch', 'zh') }}"
                            class="hover:underline {{ app()->getLocale() == 'zh' ? 'font-bold' : '' }}">
                            CN
                        </a>
                    </div>

                    <div>
                        <a href="/ask-question" class="hover:underline">
                            {{ app()->getLocale() == 'zh' ? '有问题吗？' : 'Ask Questions' }}
                        </a>
                    </div>

                </div>
            </div>

            {{-- navbar --}}
            <nav class="relative z-50 bg-[#ffffffe0] backdrop-blur-xs shadow-lg ">
                <div class="top-5 left-0 w-full z-50 text-secondary  text-white container">
                    <div class="navbar py-2 flex gap-5 h-[65px] md:h-auto">
                        <!-- Navbar Start -->
                        <div class="navbar-start flex justify-between items-center w-full lg:flex-1">

                            <!-- Logo -->
                            <a href="/" class="h-full">
                                <img src="{{ asset('/frontend/images/logo-2.webp') }}" alt="Logo"
                                    class="h-10 sm:h-12 md:h-16 w-full object-contain" />
                                {{-- <h4 class="h4 font-bold"> Apex-Scrap </h4> --}}
                            </a>

                            <!-- Mobile Navigation -->
                            <div class="relative lg:hidden text-primary">
                                <button id="menu-toggle" class="btn btn-ghost p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>
                                {{-- <ul id="mobile-menu"
                                class="fixed left-4 right-4 top-30 mt-2 p-5 bg-white rounded-2xl shadow-2xl z-[9999] animate__animated animate__slideInDown animate__faster transition-all duration-300 ease-in-out max-h-[calc(100vh-6rem)] overflow-y-auto invisible opacity-0 scale-95"> --}}

                                <ul id="mobile-menu"
                                    class="fixed left-4 right-4 top-20 mt-2 p-5 bg-white rounded-2xl shadow-2xl z-[9999] 
           animate__animated animate__faster transition-all duration-300 ease-in-out 
           max-h-[calc(100vh-6rem)] overflow-y-auto invisible opacity-0 scale-95">

                                    <!-- Home Link -->
                                    <li class="py-4 px-2 border-b border-gray-100">
                                        <a href="/" class="text-lg font-medium block w-full">
                                            {{ app()->getLocale() == 'zh' ? '主页' : 'Home' }}
                                        </a>
                                    </li>

                                    <!-- about -->
                                    <li class="py-4 px-2 border-b border-gray-100">
                                        <a href="/about" class="text-lg font-medium block w-full">
                                            {{ app()->getLocale() == 'zh' ? '关于我们' : 'About' }}
                                        </a>
                                    </li>

                                    <!-- Services -->
                                    <li class="py-4 px-2 border-b border-gray-100">
                                        <a href="/services" class="text-lg font-medium block w-full">
                                            {{ app()->getLocale() == 'zh' ? '服务' : 'Services' }}
                                        </a>
                                    </li>

                                    <!-- Materials -->
                                    <li class="py-4 px-2 border-b border-gray-100">
                                        <a href="/materials" class="text-lg font-medium block w-full">
                                            {{ app()->getLocale() == 'zh' ? '材料' : 'Materials' }}
                                        </a>
                                    </li>

                                    <!-- Contact -->
                                    <li class="py-4 px-2 border-b border-gray-100">
                                        <a href="/contact" class="text-lg font-medium block w-full">
                                            {{ app()->getLocale() == 'zh' ? '联系我们' : 'Contact' }}
                                        </a>
                                    </li>

                                    <!-- Insight -->
                                    <li class="py-4 px-2 border-b border-gray-100">
                                        <a href="/insight" class="text-lg font-medium block w-full">
                                            {{ app()->getLocale() == 'zh' ? '洞察' : 'Insight' }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/contact/#msg-us">
                                            <button
                                                class="hover:text-green-800 transition-all duration-200 border-x-2 border-b-4 border-green-800 px-3 py-1 rounded-lg"
                                                {{-- onclick="getQuoteModal.showModal()" --}}>
                                                {{ app()->getLocale() == 'zh' ? '获取报价' : 'Get Quote' }}
                                            </button>

                                        </a>

                                    </li>

                                </ul>
                            </div>

                        </div>

                        <!-- Navbar Center (Desktop) -->
                        <div class="navbar-center hidden lg:flex gap-16 ">
                            <ul class="flex gap-10 items-center h6">

                                <!-- Home -->
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="hover:text-green-800 transition-all duration-200 {{ Route::is('home') ? 'active' : '' }}">
                                        {{ app()->getLocale() == 'zh' ? '主页' : 'Home' }}
                                    </a>
                                </li>

                                <!-- About -->
                                <li>
                                    <a href="{{ route('about') }}"
                                        class="hover:text-green-800 transition-all duration-200 {{ Route::is('about') ? 'active' : '' }}">
                                        {{ app()->getLocale() == 'zh' ? '关于我们' : 'About' }}
                                    </a>
                                </li>

                                <!-- Services -->
                                <li>
                                    <a href="{{ route('services') }}"
                                        class="hover:text-green-800 transition-all duration-200 {{ Route::is('services') ? 'active' : '' }}">
                                        {{ app()->getLocale() == 'zh' ? '服务' : 'Services' }}
                                    </a>
                                </li>

                                <!-- Materials -->
                                <li>
                                    <a href="{{ route('materials') }}"
                                        class="hover:text-green-800 transition-all duration-200 {{ Route::is('materials') ? 'active' : '' }}">
                                        {{ app()->getLocale() == 'zh' ? '材料' : 'Materials' }}
                                    </a>
                                </li>

                                <!-- Contact -->
                                <li>
                                    <a href="{{ route('contact') }}"
                                        class="hover:text-green-800 transition-all duration-200 {{ Route::is('contact') ? 'active' : '' }}">
                                        {{ app()->getLocale() == 'zh' ? '联系我们' : 'Contact' }}
                                    </a>
                                </li>

                                <!-- Insight -->
                                <li>
                                    <a href="{{ route('insight') }}"
                                        class="hover:text-green-800 transition-all duration-200 {{ Route::is('insight') ? 'active' : '' }}">
                                        {{ app()->getLocale() == 'zh' ? '洞察' : 'Insight' }}
                                    </a>
                                </li>

                            </ul>

                            <!-- get quote -->
                            <a href="/contact/#msg-us">
                                <button
                                    class="hover:text-green-800 transition-all duration-200 border-x-2 border-b-4 border-green-800 px-3 py-1 rounded-lg"
                                    {{-- onclick="getQuoteModal.showModal()" --}}>
                                    {{ app()->getLocale() == 'zh' ? '获取报价' : 'Get Quote' }}
                                </button>
                            </a>

                            <!-- sidebar -->
                            {{-- <button>
                                <img src="{{ asset('/frontend/images/sidebar-icon.svg') }}" alt="">
                            </button> --}}

                            <label for="my-drawer" class="cursor-pointer">
                                <img src="{{ asset('/frontend/images/sidebar-icon.svg') }}" alt="Sidebar Icon"
                                    class="w-8 h-8">
                            </label>


                        </div>

                    </div>
                </div>
            </nav>

        </div>

    </header>



    <!-- DaisyUI Drawer sidebar -->
    <div class="drawer drawer-end z-[1000]">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />



        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>
            <div class="menu p-4 w-80 min-h-full bg-white shadow-lg space-y-4 animate-slideIn">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl text-primary font-semibold">
                        {{ app()->getLocale() == 'zh' ? '连接性' : 'Connectivity' }}
                    </h4>

                    <!-- Close Button -->
                    <label for="my-drawer" class="cursor-pointer">
                        <img src="{{ asset('/frontend/images/sidebar-icon.svg') }}" alt="Close" class="w-6 h-6">
                    </label>
                </div>


                <div class="py-6 flex flex-col gap-2 ">
                    <h4 class="h4 font-bold flex items-center gap-2.5"> <img class="h-8"
                            src="{{ asset('/frontend/images/logo.png') }}" alt=""> Apex Scrap </h4>
                    <p class="text-secondary text-base">
                        {{ app()->getLocale() == 'zh'
                            ? '我们为全球工业提供优质的再生废料，帮助您节省成本、确保质量并支持可持续发展。'
                            : 'We supply premium recycled scrap materials to industries worldwide—helping you save costs, ensure quality, and support sustainability.' }}
                    </p>
                </div>



                <div class="flex justify-center flex-col gap-3">


                    <div class="flex gap-2">
                        <span class="mt-1.5">
                            <img src="{{ asset('/frontend/images/email-icon.svg') }}" alt="">
                        </span>

                        <span>
                            <h6 class="h6 font-semibold"> Email </h6>
                            <p class="text-base">info@apex-scrap.com </p>
                        </span>
                    </div>

                    <div class="flex gap-2">
                        <span class="mt-1.5">
                            <img src="{{ asset('/frontend/images/phone-icon.svg') }}" alt="">
                        </span>

                        <span>
                            <h6 class="h6 font-semibold"> Cell </h6>
                            <p class="text-base"> +13134552725 </p>
                        </span>
                    </div>

                    <div class="flex gap-2">
                        <span class="mt-1.5">
                            <img src="{{ asset('/frontend/images/location-icon.svg') }}" alt="">
                        </span>

                        <span>
                            <h6 class="h6 font-semibold"> Address </h6>
                            <p class="text-base"> 5452 Aerospace Drive Laramie, WY 82070, USA </p>
                        </span>
                    </div>
                </div>

                {{-- social medias --}}
                <div class="grid grid-cols-4 mt-6">

                    {{-- Facebook --}}
                    <a href="#"
                        class="p-2 bg-gray-200 h-12 w-12 rounded-full center transition duration-300 hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 71 72"
                            fill="green">
                            <path
                                d="M46.4233 38.6403L47.7279 30.3588H39.6917V24.9759C39.6917 22.7114 40.8137 20.4987 44.4013 20.4987H48.1063V13.4465C45.9486 13.1028 43.7685 12.9168 41.5834 12.8901C34.9692 12.8901 30.651 16.8626 30.651 24.0442V30.3588H23.3193V38.6403H30.651V58.671H39.6917V38.6403H46.4233Z"
                                fill="#0c514a" />
                        </svg> </a>

                    {{-- whatsapp --}}
                    <a href="https://wa.me/13134552725" target="_blank"
                        class="p-2 bg-gray-200 h-12 w-12 rounded-full center transition duration-300 hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none">
                            <path
                                d="M12.5068 56.8405L15.7915 44.6381C13.1425 39.8847 12.3009 34.3378 13.4211 29.0154C14.5413 23.693 17.5482 18.952 21.89 15.6624C26.2319 12.3729 31.6173 10.7554 37.0583 11.1068C42.4992 11.4582 47.6306 13.755 51.5108 17.5756C55.3911 21.3962 57.7599 26.4844 58.1826 31.9065C58.6053 37.3286 57.0535 42.7208 53.812 47.0938C50.5705 51.4668 45.8568 54.5271 40.5357 55.7133C35.2146 56.8994 29.6432 56.1318 24.8438 53.5513L12.5068 56.8405ZM25.4386 48.985L26.2016 49.4365C29.6779 51.4918 33.7382 52.3423 37.7498 51.8555C41.7613 51.3687 45.4987 49.5719 48.3796 46.7452C51.2605 43.9185 53.123 40.2206 53.6769 36.2279C54.2308 32.2351 53.445 28.1717 51.4419 24.6709C49.4388 21.1701 46.331 18.4285 42.6027 16.8734C38.8745 15.3184 34.7352 15.0372 30.8299 16.0736C26.9247 17.11 23.4729 19.4059 21.0124 22.6035C18.5519 25.801 17.2209 29.7206 17.2269 33.7514C17.2237 37.0937 18.1503 40.3712 19.9038 43.2192L20.3823 44.0061L18.546 50.8167L25.4386 48.985Z"
                                fill="#0c514a" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M43.9566 36.8847C43.5093 36.5249 42.9856 36.2716 42.4254 36.1442C41.8651 36.0168 41.2831 36.0186 40.7236 36.1495C39.8831 36.4977 39.3399 37.8134 38.7968 38.4713C38.6823 38.629 38.514 38.7396 38.3235 38.7823C38.133 38.8251 37.9335 38.797 37.7623 38.7034C34.6849 37.5012 32.1055 35.2965 30.4429 32.4475C30.3011 32.2697 30.2339 32.044 30.2557 31.8178C30.2774 31.5916 30.3862 31.3827 30.5593 31.235C31.165 30.6368 31.6098 29.8959 31.8524 29.0809C31.9063 28.1818 31.6998 27.2863 31.2576 26.5011C30.9157 25.4002 30.265 24.42 29.3825 23.6762C28.9273 23.472 28.4225 23.4036 27.9292 23.4791C27.4359 23.5546 26.975 23.7709 26.6021 24.1019C25.9548 24.6589 25.4411 25.3537 25.0987 26.135C24.7562 26.9163 24.5939 27.7643 24.6236 28.6165C24.6256 29.0951 24.6864 29.5716 24.8046 30.0354C25.1049 31.1497 25.5667 32.2144 26.1754 33.1956C26.6145 33.9473 27.0937 34.6749 27.6108 35.3755C29.2914 37.6767 31.4038 39.6305 33.831 41.1284C35.049 41.8897 36.3507 42.5086 37.7105 42.973C39.1231 43.6117 40.6827 43.8568 42.2237 43.6824C43.1018 43.5499 43.9337 43.2041 44.6462 42.6755C45.3588 42.1469 45.9302 41.4518 46.3102 40.6512C46.5334 40.1675 46.6012 39.6269 46.5042 39.1033C46.2714 38.0327 44.836 37.4007 43.9566 36.8847Z"
                                fill="#0c514a" />
                        </svg>

                    </a>
                    {{-- Linkedin --}}
                    <a href="#"
                        class="p-2 bg-gray-200 h-12 w-12 rounded-full center transition duration-300 hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72"
                            fill="none">
                            <path
                                d="M24.7612 55.999V28.3354H15.5433V55.999H24.7621H24.7612ZM20.1542 24.5591C23.3679 24.5591 25.3687 22.4348 25.3687 19.7801C25.3086 17.065 23.3679 15 20.2153 15C17.0605 15 15 17.065 15 19.7799C15 22.4346 17.0001 24.5588 20.0938 24.5588H20.1534L20.1542 24.5591ZM29.8633 55.999H39.0805V40.5521C39.0805 39.7264 39.1406 38.8985 39.3841 38.3088C40.0502 36.6562 41.5668 34.9455 44.1138 34.9455C47.4484 34.9455 48.7831 37.4821 48.7831 41.2014V55.999H58V40.1376C58 31.6408 53.4532 27.6869 47.3887 27.6869C42.4167 27.6869 40.233 30.4589 39.0198 32.347H39.0812V28.3364H29.8638C29.9841 30.9316 29.8631 56 29.8631 56L29.8633 55.999Z"
                                fill="#0c514a" />
                        </svg> </a>

                    {{-- We chat --}}
                    <a href="#"
                        class="p-2 bg-gray-200 h-12 w-12 rounded-full center transition duration-300 hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72"
                            fill="none">
                            <path
                                d="M45.8956 26.0879C46.8845 26.0879 47.8503 26.1701 48.8032 26.2876C47.0805 18.7224 39.1346 13 29.5799 13C18.7651 13 10 20.3257 10 29.3599C10 34.5686 12.9306 39.1897 17.4761 42.1798L14.8948 47.3562L21.9268 44.336C23.4347 44.873 25.0016 45.3152 26.6753 45.521C26.4465 44.5226 26.3166 43.4991 26.3166 42.4487C26.3166 33.4273 35.0976 26.0879 45.8956 26.0879ZM36.1064 20.3615C37.4577 20.3615 38.5536 21.4608 38.5536 22.8158C38.5536 24.1713 37.4578 25.2698 36.1064 25.2698C34.7543 25.2698 33.6589 24.1713 33.6589 22.8158C33.6589 21.4607 34.7543 20.3615 36.1064 20.3615ZM23.0531 25.2698C21.7016 25.2698 20.6057 24.1713 20.6057 22.8158C20.6057 21.4608 21.7017 20.3615 23.0531 20.3615C24.4045 20.3615 25.5006 21.4608 25.5006 22.8158C25.5005 24.1713 24.4044 25.2698 23.0531 25.2698Z"
                                fill="#0c514a" />
                            <path
                                d="M62.2121 42.4484C62.2121 35.22 54.9051 29.3599 45.8956 29.3599C36.8858 29.3599 29.5799 35.22 29.5799 42.4484C29.5799 49.6763 36.8858 55.5365 45.8956 55.5365C47.3773 55.5365 48.7867 55.3271 50.1542 55.0297L58.9489 58.8084L55.9072 52.713C59.7191 50.3174 62.2121 46.6335 62.2121 42.4484ZM41.001 41.6303C39.6496 41.6303 38.5534 40.5314 38.5534 39.1757C38.5534 37.8207 39.6495 36.7222 41.001 36.7222C42.3528 36.7222 43.4482 37.8212 43.4482 39.1757C43.4482 40.5316 42.3526 41.6303 41.001 41.6303ZM50.7905 41.6303C49.4385 41.6303 48.3433 40.5314 48.3433 39.1757C48.3433 37.8207 49.4384 36.7222 50.7905 36.7222C52.1425 36.7222 53.238 37.8212 53.238 39.1757C53.238 40.5316 52.1425 41.6303 50.7905 41.6303Z"
                                fill="#0c514a" />
                        </svg> </a> {{-- Add other icons the same way --}}


                </div>



            </div>
        </div>
    </div>



    <!-- Loader -->
    <div id="pageLoader"
        class="fixed inset-0 bg-white z-[9999] flex items-center justify-center opacity-95 transition-opacity ease-in-out">

        <div class="flex flex-col items-center space-y-2">
            <!-- Logo -->
            <img src="{{ asset('/frontend/images/logo-2.webp') }}" alt="Loading Logo"
                class="h-24 md:h-42 w-auto animate-pulse  rounded-lg" />
        </div>
    </div>



    <main>
        <div class="">
            @yield('content')
        </div>
    </main>

    <footer class="bg-primary text-white px-6 py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">

            {{-- Logo + About --}}
            <aside class="col-span-1 lg:col-span-2 flex flex-col gap-4">
                <a href="/">
                    <img src="{{ asset('/frontend/images/logo-2.webp') }}" alt="Logo"
                        class="w-40 md:w-52 bg-white" loading="lazy">
                </a>

                <p class="text-sm leading-relaxed">
                    {{ app()->getLocale() == 'zh'
                        ? '专业的废金属回收服务，公平的价格，快速的上门取件，环保的处理方式。今天就把废品变成现金吧。'
                        : 'Professional scrap metal recycling services with fair prices, fast pickup, and eco-friendly processing. Turn your scrap into cash today.' }}
                </p>

                {{-- Social Icons --}}
                <div class="flex gap-3 flex-wrap">
                    {{-- Facebook --}}
                    <a href="#"
                        class="group p-2 bg-gray-100 rounded-lg flex items-center justify-center border border-gray-300 hover:bg-gray-300
          transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 71 72"
                            fill="none"
                            class="text-gray-800 transition-colors duration-300 group-hover:text-green-800">
                            <path
                                d="M46.4233 38.6403L47.7279 30.3588H39.6917V24.9759C39.6917 22.7114 40.8137 20.4987 44.4013 20.4987H48.1063V13.4465C45.9486 13.1028 43.7685 12.9168 41.5834 12.8901C34.9692 12.8901 30.651 16.8626 30.651 24.0442V30.3588H23.3193V38.6403H30.651V58.671H39.6917V38.6403H46.4233Z"
                                fill="currentColor" />
                        </svg>
                    </a>


                    {{-- whatsapp --}}
                    <a href="https://wa.me/13134552725" target="_blank"
                        class="p-1 bg-gray-100 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:bg-gray-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none"
                            class="text-gray-800 transition-colors duration-300 group-hover:text-green-800">
                            <path
                                d="M12.5068 56.8405L15.7915 44.6381C13.1425 39.8847 12.3009 34.3378 13.4211 29.0154C14.5413 23.693 17.5482 18.952 21.89 15.6624C26.2319 12.3729 31.6173 10.7554 37.0583 11.1068C42.4992 11.4582 47.6306 13.755 51.5108 17.5756C55.3911 21.3962 57.7599 26.4844 58.1826 31.9065C58.6053 37.3286 57.0535 42.7208 53.812 47.0938C50.5705 51.4668 45.8568 54.5271 40.5357 55.7133C35.2146 56.8994 29.6432 56.1318 24.8438 53.5513L12.5068 56.8405ZM25.4386 48.985L26.2016 49.4365C29.6779 51.4918 33.7382 52.3423 37.7498 51.8555C41.7613 51.3687 45.4987 49.5719 48.3796 46.7452C51.2605 43.9185 53.123 40.2206 53.6769 36.2279C54.2308 32.2351 53.445 28.1717 51.4419 24.6709C49.4388 21.1701 46.331 18.4285 42.6027 16.8734C38.8745 15.3184 34.7352 15.0372 30.8299 16.0736C26.9247 17.11 23.4729 19.4059 21.0124 22.6035C18.5519 25.801 17.2209 29.7206 17.2269 33.7514C17.2237 37.0937 18.1503 40.3712 19.9038 43.2192L20.3823 44.0061L18.546 50.8167L25.4386 48.985Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M43.9566 36.8847C43.5093 36.5249 42.9856 36.2716 42.4254 36.1442C41.8651 36.0168 41.2831 36.0186 40.7236 36.1495C39.8831 36.4977 39.3399 37.8134 38.7968 38.4713C38.6823 38.629 38.514 38.7396 38.3235 38.7823C38.133 38.8251 37.9335 38.797 37.7623 38.7034C34.6849 37.5012 32.1055 35.2965 30.4429 32.4475C30.3011 32.2697 30.2339 32.044 30.2557 31.8178C30.2774 31.5916 30.3862 31.3827 30.5593 31.235C31.165 30.6368 31.6098 29.8959 31.8524 29.0809C31.9063 28.1818 31.6998 27.2863 31.2576 26.5011C30.9157 25.4002 30.265 24.42 29.3825 23.6762C28.9273 23.472 28.4225 23.4036 27.9292 23.4791C27.4359 23.5546 26.975 23.7709 26.6021 24.1019C25.9548 24.6589 25.4411 25.3537 25.0987 26.135C24.7562 26.9163 24.5939 27.7643 24.6236 28.6165C24.6256 29.0951 24.6864 29.5716 24.8046 30.0354C25.1049 31.1497 25.5667 32.2144 26.1754 33.1956C26.6145 33.9473 27.0937 34.6749 27.6108 35.3755C29.2914 37.6767 31.4038 39.6305 33.831 41.1284C35.049 41.8897 36.3507 42.5086 37.7105 42.973C39.1231 43.6117 40.6827 43.8568 42.2237 43.6824C43.1018 43.5499 43.9337 43.2041 44.6462 42.6755C45.3588 42.1469 45.9302 41.4518 46.3102 40.6512C46.5334 40.1675 46.6012 39.6269 46.5042 39.1033C46.2714 38.0327 44.836 37.4007 43.9566 36.8847Z"
                                fill="currentColor" />
                        </svg>

                    </a>
                    {{-- Linkedin --}}
                    <a href="#"
                        class="p-1 bg-gray-100 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:bg-gray-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72"
                            fill="none"
                            class="text-gray-800 transition-colors duration-300 group-hover:text-green-800">
                            <path
                                d="M24.7612 55.999V28.3354H15.5433V55.999H24.7621H24.7612ZM20.1542 24.5591C23.3679 24.5591 25.3687 22.4348 25.3687 19.7801C25.3086 17.065 23.3679 15 20.2153 15C17.0605 15 15 17.065 15 19.7799C15 22.4346 17.0001 24.5588 20.0938 24.5588H20.1534L20.1542 24.5591ZM29.8633 55.999H39.0805V40.5521C39.0805 39.7264 39.1406 38.8985 39.3841 38.3088C40.0502 36.6562 41.5668 34.9455 44.1138 34.9455C47.4484 34.9455 48.7831 37.4821 48.7831 41.2014V55.999H58V40.1376C58 31.6408 53.4532 27.6869 47.3887 27.6869C42.4167 27.6869 40.233 30.4589 39.0198 32.347H39.0812V28.3364H29.8638C29.9841 30.9316 29.8631 56 29.8631 56L29.8633 55.999Z"
                                fill="currentColor" />
                        </svg> </a>

                    {{-- We chat --}}
                    <a href="#"
                        class="p-1 bg-[#e3dddd] rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:bg-gray-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72"
                            fill="none"
                            class="text-gray-800 transition-colors duration-300 group-hover:text-green-800">
                            <path
                                d="M45.8956 26.0879C46.8845 26.0879 47.8503 26.1701 48.8032 26.2876C47.0805 18.7224 39.1346 13 29.5799 13C18.7651 13 10 20.3257 10 29.3599C10 34.5686 12.9306 39.1897 17.4761 42.1798L14.8948 47.3562L21.9268 44.336C23.4347 44.873 25.0016 45.3152 26.6753 45.521C26.4465 44.5226 26.3166 43.4991 26.3166 42.4487C26.3166 33.4273 35.0976 26.0879 45.8956 26.0879ZM36.1064 20.3615C37.4577 20.3615 38.5536 21.4608 38.5536 22.8158C38.5536 24.1713 37.4578 25.2698 36.1064 25.2698C34.7543 25.2698 33.6589 24.1713 33.6589 22.8158C33.6589 21.4607 34.7543 20.3615 36.1064 20.3615ZM23.0531 25.2698C21.7016 25.2698 20.6057 24.1713 20.6057 22.8158C20.6057 21.4608 21.7017 20.3615 23.0531 20.3615C24.4045 20.3615 25.5006 21.4608 25.5006 22.8158C25.5005 24.1713 24.4044 25.2698 23.0531 25.2698Z"
                                fill="currentColor" />
                            <path
                                d="M62.2121 42.4484C62.2121 35.22 54.9051 29.3599 45.8956 29.3599C36.8858 29.3599 29.5799 35.22 29.5799 42.4484C29.5799 49.6763 36.8858 55.5365 45.8956 55.5365C47.3773 55.5365 48.7867 55.3271 50.1542 55.0297L58.9489 58.8084L55.9072 52.713C59.7191 50.3174 62.2121 46.6335 62.2121 42.4484ZM41.001 41.6303C39.6496 41.6303 38.5534 40.5314 38.5534 39.1757C38.5534 37.8207 39.6495 36.7222 41.001 36.7222C42.3528 36.7222 43.4482 37.8212 43.4482 39.1757C43.4482 40.5316 42.3526 41.6303 41.001 41.6303ZM50.7905 41.6303C49.4385 41.6303 48.3433 40.5314 48.3433 39.1757C48.3433 37.8207 49.4384 36.7222 50.7905 36.7222C52.1425 36.7222 53.238 37.8212 53.238 39.1757C53.238 40.5316 52.1425 41.6303 50.7905 41.6303Z"
                                fill="currentColor" />
                        </svg> </a>
                </div>
            </aside>

            {{-- Quick Links --}}
            <nav class="flex flex-col items-start hidden md:block">
                <h6 class="h6 underline decoration-dotted font-bold footer-title mb-3">
                    {{ app()->getLocale() == 'zh' ? '快速链接' : 'Quick Links' }}
                </h6>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li><a href="/about"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '关于我们' : 'About Us' }}</a></li>
                    <li><a href="/services"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '服务' : 'Services' }}</a></li>
                    <li><a href="/materials"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '材料' : 'Materials' }}</a></li>
                    <li><a href="/insight"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '洞察' : 'Insight' }}</a></li>

                </ul>
            </nav>

            {{-- Services --}}
            <nav class="flex flex-col items-start hidden md:block">
                <h6 class="h6 underline decoration-dotted font-bold footer-title mb-3">
                    {{ app()->getLocale() == 'zh' ? '服务项目' : 'Materials' }}
                </h6>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li><a href="/materials"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '黑色金属' : 'Ferrous-Metal' }}</a>
                    </li>
                    <li><a href="/materials"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '有色金属' : 'Non-Ferrous-Metal' }}</a>
                    </li>
                    <li><a href="/materials"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '催化转化器' : 'Catalytic-Converters' }}</a>
                    </li>
                    <li><a href="/materials"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '塑料' : 'Plastics' }}</a>
                    </li>
                    <li><a href="/materials"
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '纸' : 'Paper' }}</a>
                    </li>
                </ul>
            </nav>

            {{-- Contact --}}
            <nav class="flex flex-col items-start ">
                <h6 class="h6 underline decoration-dotted font-bold footer-title mb-3">
                    {{ app()->getLocale() == 'zh' ? '联系方式' : 'Contact Info' }}
                </h6>
                <ul class="space-y-1 text-sm">
                    <li><a href="tel:+13134552725" class="link link-hover">+13134552725</a></li>
                    <li><a class="link link-hover">info@apex-scrap.com</a></li>
                    <li><a
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '5452 Aerospace Drive Laramie, WY 82070, USA' : '5452 Aerospace Drive Laramie, WY 82070, USA' }}</a>
                    </li>
                    <li><a
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '回收市, RC 12345' : 'Recycling City, RC 12345' }}</a>
                    </li>
                    <li><a
                            class="link link-hover">{{ app()->getLocale() == 'zh' ? '周一至周五 早7点-晚6点' : 'Mon-Fri 7AM-6PM' }}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>

    <footer class="bg-secondary text-white p-8">
        <p class="container text-center">
            {{ app()->getLocale() == 'zh' ? '版权@ 2025 ' : 'Copyright@ 2025 ' }}
            <a href="#" class="underline">Apex World Trade Solution LLC.</a>
            {{ app()->getLocale() == 'zh' ? ' 本站由 Studx 制作' : ' This Site is by Studx' }}
        </p>
    </footer>


    {{-- mobile script --}}

    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');

        toggle.addEventListener('click', function() {
            const isVisible = menu.classList.contains('visible');

            if (isVisible) {
                menu.classList.remove('visible', 'animate__slideInDown');
                menu.classList.add('invisible', 'opacity-0', 'scale-95');
            } else {
                menu.classList.remove('invisible', 'opacity-0', 'scale-95');
                menu.classList.add('visible', 'animate__slideInDown');
            }
        });

        // Optional: Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!menu.contains(e.target) && !toggle.contains(e.target)) {
                menu.classList.remove('visible', 'animate__slideInDown');
                menu.classList.add('invisible', 'opacity-0', 'scale-95');
            }
        });
    </script>


    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Swiper init --}}
    <script>
        const swiper = new Swiper('.swiper-review', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            autoplay: {
                delay: 3000, // 3 seconds
                disableOnInteraction: false, // keeps autoplay after manual navigation
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                }, // md
                1024: {
                    slidesPerView: 3
                }, // lg
            },
        });
    </script>


    {{-- loader --}}
    <script>
        // Fade out loader after page load
        window.addEventListener('load', () => {
            const loader = document.getElementById('pageLoader');
            loader.classList.add('opacity-0');
            setTimeout(() => loader.style.display = 'none', 100);
        });
    </script>





</body>

</html>
