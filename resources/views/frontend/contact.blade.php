@extends('frontend.layouts.app')

@section('title', 'Apex-Scrap Contact')

@section('content')



    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>


        /*-- css for map -- */
        #map {
            height: 500px;
            border-radius: 0.5rem;
            z-index: 1;
        }

        .leaflet-popup-content {
            margin: 13px 19px;
            line-height: 1.4;
        }


        .country-label {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 4px;
            padding: 2px 8px;
            font-weight: 600;
            font-size: 12px;
            border: 1px solid #ccc;
            white-space: nowrap;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        .custom-marker {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .marker-pin {
            width: 30px;
            height: 30px;
            border-radius: 50% 50% 50% 0;
            background: #0c514a;
            position: absolute;
            transform: rotate(-45deg);
            left: 50%;
            top: 50%;
            margin: -15px 0 0 -15px;
        }

        .marker-pin::after {
            content: '';
            width: 24px;
            height: 24px;
            margin: 3px 0 0 3px;
            background: #fff;
            position: absolute;
            border-radius: 50%;
        }
    </style>

    {{-- banner --}}
    <section class="relative center min-h-[40vh] md:min-h-[50vh] bg-black/40 bg-cover bg-no-repeat bg-center"
        style="background-image: url('{{ asset('/frontend/images/banner.webp') }}')">

        {{-- Dark overlay --}}
        <div class="absolute inset-0 bg-black opacity-70"></div>

        <div class="relative z-10 text-white px-5 md:px-10 max-w-4xl center flex-col gap-3">
            <h1 class="h2 font-bold">
                <span class="text-third">Contact</span> <span>Us</span>
            </h1>
            <p class="w-full md:w-5/6 text-white text-center">
                Apex Scrap, we go beyond supplying scrap—we deliver tailored solutions for global industries. Whether
                you’re an international buyer, a business partner, or a large-scale industry, our services are designed to
                ensure reliability, transparency, and long-term value.
            </p>
        </div>
    </section>

    {{-- show message --}}
    <div>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <section class="py-16 container grid grid-cols-1 md:grid-cols-3">

        <div class="con-span-1">
            <div>
                <h3 class="h3 font-bold text-primary my-3"> USA Office </h3>
                <div class="flex flex-col gap-4">
                    <div>
                        <h6 class="h6 font-semibold">Email</h6>
                        <p> info@apex-scrap.com </p>
                    </div>
                    <div>
                        <h6 class="h6 font-semibold">Phone Number</h6>
                        <p> +31000000099 </p>
                    </div>
                    <div>
                        <h6 class="h6 font-semibold">Address</h6>
                        <p> 5452 Aerospace Drive Laramie, WY 82070, USA </p>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <h3 class="h3 font-bold text-primary my-3"> China Office </h3>
                <div class="flex flex-col gap-4">
                    <div>
                        <h6 class="h6 font-semibold">Email</h6>
                        <p> info@apex-scrap.com </p>
                    </div>
                    <div>
                        <h6 class="h6 font-semibold">Phone Number</h6>
                        <p> +31000000099 </p>
                    </div>
                    <div>
                        <h6 class="h6 font-semibold">Address</h6>
                        <p> 5452 Aerospace Drive Laramie, WY 82070, USA </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <!--  Contact Form -->
            <div class="bg-white rounded-xl shadow-2xl p-8">
                <h4 class="h3 font-bold text-primary text-center mb-6">Send us a message</h4>

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" id="name" name="name"
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Your name" required>
                            </div>
                        </div>

                        <!-- Scrap Category -->
                        <div>
                            <label for="scrap_category" class="block text-gray-700 font-medium mb-2">Scrap Category</label>
                            <select id="scrap_category" name="scrap_category"
                                class="w-full pl-3 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Category</option>
                                <option value="metal">Metal</option>
                                <option value="electronics">Electronics</option>
                                <option value="plastic">Plastic</option>
                                <option value="paper">Paper</option>
                            </select>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input type="text" id="phone" name="phone"
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Your phone number" required>
                            </div>
                        </div>

                        <!-- Material Type -->
                        <div>
                            <label for="material_type" class="block text-gray-700 font-medium mb-2">Material Type</label>
                            <select id="material_type" name="material_type"
                                class="w-full pl-3 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Material</option>
                                <option value="copper">Copper</option>
                                <option value="aluminum">Aluminum</option>
                                <option value="steel">Steel</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email"
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="your.email@example.com" required>
                            </div>
                        </div>

                        <!-- Estimated Weight -->
                        <div>
                            <label for="estimated_weight" class="block text-gray-700 font-medium mb-2">Estimated
                                Weight</label>
                            <select id="estimated_weight" name="estimated_weight"
                                class="w-full pl-3 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Weight</option>
                                <option value="<50kg">Less than 50kg</option>
                                <option value="50-100kg">50-100kg</option>
                                <option value="100-500kg">100-500kg</option>
                                <option value=">500kg">More than 500kg</option>
                            </select>
                        </div>

                    </div>

                    <!-- Additional Details -->
                    <div class="mt-6">
                        <label for="details" class="block text-gray-700 font-medium mb-2">Additional Details</label>
                        <div class="relative">
                            <div class="absolute top-3 left-3 pointer-events-none">
                                <i class="fas fa-comment text-gray-400"></i>
                            </div>
                            <textarea id="details" name="details" rows="5"
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Provide any additional details here"></textarea>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 flex items-center justify-center mt-6">
                        <i class="fas fa-paper-plane mr-2"></i> Send Message
                    </button>
                </form>


            </div>
        </div>



    </section>





    {{-- map --}}

    <section class="py-16">

        <div class="bg-white rounded-xl shadow-lg p-3 w-full">
            <h3 class="h3 font-bold text-primary mb-6 text-center">Our Global Presence</h3>
            <div id="map"></div>
            <p class="text-primary text-sm mt-4">We have offices and business operations in these key locations
                around the world.</p>
        </div>

    </section>









    <script>
        // Initialize the map
        function initMap() {
            // Create a map centered in Asia
            const map = L.map('map').setView([30, 100], 2);

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Define office locations [lat, lng, title, country]
            const offices = [
                [31.2304, 121.4737, "Shanghai Office", "China", "🇨🇳"],
                [1.3521, 103.8198, "Regional HQ", "Singapore", "🇸🇬"],
                [35.6762, 139.6503, "Tokyo Office", "Japan", "🇯🇵"],
                [25.2769, 55.2962, "Middle East Office", "Dubai, UAE", "🇦🇪"],
                [41.0082, 28.9784, "Istanbul Office", "Turkey", "🇹🇷"]
            ];

            // Create a custom icon
            const customIcon = L.divIcon({
                className: 'custom-marker',
                html: '<div class="marker-pin"></div>',
                iconSize: [30, 42],
                iconAnchor: [15, 42]
            });

            // Add markers for each office
            offices.forEach(office => {
                const marker = L.marker([office[0], office[1]], {
                    icon: customIcon
                }).addTo(map);

                // Create a permanent label for the marker
                const label = L.marker([office[0], office[1]], {
                    icon: L.divIcon({
                        className: '',
                        html: `<div class="country-label">${office[3]}</div>`,
                        iconSize: [60, 20],
                        iconAnchor: [30, 0]
                    }),
                    zIndexOffset: 1000
                }).addTo(map);

                // Bind popup to marker
                marker.bindPopup(`
                    <div class="font-bold text-lg">${office[4]} ${office[2]}</div>
                    <div class="text-gray-600">${office[3]}</div>
                    <div class="mt-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">View Details</a>
                    </div>
                `);
            });
        }

        // Initialize the map when the page loads
        document.addEventListener('DOMContentLoaded', initMap);
    </script>


@endsection
