<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/frontend/images/logo.png') }}" type="image/x-icon">
    <title>Apex Scrap</title>

    {{-- DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    {{-- Tailwind CSS --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('/frontend/style.css') }}">

    {{-- font family --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>

</head>

<body>
    <header>
        {{-- Language Switch - top nav --}}
        <div class="bg-primary text-white  py-3">
            <div class="container flex justify-end gap-10 " >


                <div>
                    <a href="{{ route('lang.switch', 'en') }}" class="hover:underline">EN</a> |
                    <a href="{{ route('lang.switch', 'zh') }}" class="hover:underline">CN</a>
                </div>
                <div>
                    <a href="/contact" class="hover:underline"> Ask Questions </a>
                </div>

            </div>
        </div>

        {{-- navbar --}}
        <nav class="relative z-50">
            <div class="top-5 left-0 w-full shadow-lg z-50 text-secondary backdrop-blur-sm text-white">
                <div class="navbar px-4 sm:px-8 py-2 flex gap-5 h-[65px] md:h-auto">
                    <!-- Navbar Start -->
                    <div class="navbar-start flex justify-between items-center w-full lg:flex-1">

                        <!-- Logo -->
                        <a href="/" class="flex items-center h-full gap-2.5">
                            <img src="{{ asset('/frontend/images/logo.png') }}" alt="Logo"
                                class="h-10 sm:h-12 md:h-16 w-auto max-w-full object-contain" />
                            <h4 class="h4"> Apex-Scrap </h4>
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
                            <ul id="mobile-menu"
                                class="fixed left-4 right-4 top-20 mt-2 p-5 bg-white rounded-2xl shadow-2xl z-[9999] animate__animated animate__slideInDown animate__faster transition-all duration-300 ease-in-out max-h-[calc(100vh-6rem)] overflow-y-auto invisible opacity-0 scale-95">



                                <!-- Home Link -->
                                <li class="py-4 px-2 border-b border-gray-100">
                                    <a href="/" class="text-lg font-medium block w-full">Home</a>
                                </li>


                                <!-- about -->
                                <li class="py-4 px-2 border-b border-gray-100">
                                    <a href="/about" class="text-lg font-medium block w-full">About</a>
                                </li>



                                <!-- what we sell -->
                                {{-- <li class="py-4 px-2 border-b border-gray-100">
                                    <details class="group">
                                        <summary
                                            class="text-lg font-medium flex justify-between items-center cursor-pointer">
                                            <span>What We Sell</span>
                                            <svg class="w-5 h-5 transform group-open:rotate-180 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </summary>
                                        <ul class="pl-4 mt-3 space-y-3">
                                            <li><a href="/demo" class="text-base block py-2">Farrous Metal</a></li>
                                            <li><a href="/demo" class="text-base block py-2">Non-Farrous Metal</a>
                                            </li>
                                            <li><a href="/demo" class="text-base block py-2">Plastic Metal</a></li>
                                        </ul>
                                    </details>
                                </li> --}}


                                <!-- Services -->
                                <li class="py-4 px-2 border-b border-gray-100">
                                    <a href="/services" class="text-lg font-medium block w-full">Services</a>
                                </li>

                                <!-- Materials -->
                                <li class="py-4 px-2 border-b border-gray-100">
                                    <a href="/materials" class="text-lg font-medium block w-full">Materials</a>
                                </li>

                                <!-- Contact -->
                                <li class="py-4 px-2 border-b border-gray-100">
                                    <a href="/contact" class="text-lg font-medium block w-full">Contact</a>
                                </li>


                                <!-- Insight -->
                                <li class="py-4 px-2 border-b border-gray-100">
                                    <a href="/insight" class="text-lg font-medium block w-full"> Insight </a>
                                </li>

                            </ul>
                        </div>

                    </div>


                    <!-- Navbar Center (Desktop) -->
                    <div class="navbar-center hidden lg:flex ">
                        <ul class="flex gap-10 items-center h6 font-normal">
                            <!-- Home -->
                            <li><a href="/" class="hover:text-sky-600 transition-all duration-200">Home</a></li>

                            <!-- About -->
                            <li><a href="/about" class="hover:text-sky-600 transition-all duration-200">About</a></li>

                            <!-- What We Sell -->
                            {{-- <li class="relative group">
                                <span
                                    class="flex items-center cursor-pointer hover:text-sky-600 transition-all duration-200">
                                    What We Sell
                                    <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                                <div
                                    class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition duration-300 ease-in-out text-lg text-secondary">
                                    <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-64 z-50 space-y-2">
                                        <a href="/demo" class="block hover:text-sky-600 transition">Farrous Metal</a>
                                        <a href="/demo" class="block hover:text-sky-600 transition">Non-Farrous
                                            Metal</a>
                                        <a href="/demo" class="block hover:text-sky-600 transition">Plastic Metal</a>
                                    </div>
                                </div>
                            </li> --}}

                            <!-- Services -->
                            <li><a href="/services" class="hover:text-sky-600 transition-all duration-200">Services</a>
                            </li>

                            <!-- Materials -->
                            <li><a href="/materials"
                                    class="hover:text-sky-600 transition-all duration-200">Materials</a>
                            </li>

                            <!-- Contact -->
                            <li><a href="/contact" class="hover:text-sky-600 transition-all duration-200">Contact</a>
                            </li>

                            <!-- Insight -->
                            <li><a href="/insight" class="hover:text-sky-600 transition-all duration-200">Insight</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </nav>


    </header>

    <main>

        <div class="">
            @yield('content')
        </div>
    </main>


    <footer>

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

</body>

</html>
