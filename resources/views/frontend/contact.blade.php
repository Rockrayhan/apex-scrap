@extends('frontend.layouts.app')

@section('title', 'Apex-Scrap Contact')

@section('content')



    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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


    <div class="max-w-7xl mx-auto px-4  pb-6">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-primary mb-4">Contact Us</h1>
            <p class="text-lg text-secondary max-w-3xl mx-auto">Get in touch with our team. We'd love to hear from you and
                answer any questions you might have.</p>
        </div>



        <section class="flex flex-col lg:flex-row gap-10">
            <!--  Contact Form -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-xl shadow-2xl p-8">
                    <h2 class="text-2xl font-bold text-primary mb-6">Send us a message</h2>

                    <form>
                        @csrf

                        <div class="mb-6">
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

                        <div class="mb-6">
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

                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-tag text-gray-400"></i>
                                </div>
                                <input type="text" id="subject" name="subject"
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="What is this regarding?" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                            <div class="relative">
                                <div class="absolute top-3 left-3 pointer-events-none">
                                    <i class="fas fa-comment text-gray-400"></i>
                                </div>
                                <textarea id="message" name="message" rows="5"
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="How can we help you?" required></textarea>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>


            {{-- map --}}
            <div class="bg-white rounded-xl shadow-lg p-3 w-full lg:w-1/2">
                <h2 class="text-2xl font-bold text-primary mb-6">Our Global Presence</h2>
                <div id="map"></div>
                <p class="text-gray-600 text-sm mt-4">We have offices and business operations in these key locations
                    around the world.</p>
            </div>

        </section>


        <section class="flex flex-col lg:flex-row gap-10">


            <!-- Business Hours -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-xl shadow-lg mt-8 p-6">
                    <h2 class="text-2xl font-bold text-primary mb-4">Global Offices</h2>

                    <div class="space-y-4 text-primary">
                        <div class="flex justify-between items-center py-3 border-b border-green-300">
                            <div class="flex items-center">
                                <span class="flag-icon flag-icon-cn mr-3 text-2xl">🇨🇳</span>
                                <span class="font-medium">China</span>
                            </div>
                            <span class="text-gray-600">Shanghai Office</span>
                        </div>

                        <div class="flex justify-between items-center py-3 border-b border-green-300">
                            <div class="flex items-center">
                                <span class="flag-icon flag-icon-sg mr-3 text-2xl">🇸🇬</span>
                                <span class="font-medium">Singapore</span>
                            </div>
                            <span class="text-gray-600">Regional HQ</span>
                        </div>

                        <div class="flex justify-between items-center py-3 border-b border-green-300">
                            <div class="flex items-center">
                                <span class="flag-icon flag-icon-jp mr-3 text-2xl">🇯🇵</span>
                                <span class="font-medium">Japan</span>
                            </div>
                            <span class="text-gray-600">Tokyo Office</span>
                        </div>

                        <div class="flex justify-between items-center py-3 border-b border-green-300">
                            <div class="flex items-center">
                                <span class="flag-icon flag-icon-ae mr-3 text-2xl">🇦🇪</span>
                                <span class="font-medium">Dubai, UAE</span>
                            </div>
                            <span class="text-gray-600">Middle East Office</span>
                        </div>

                        <div class="flex justify-between items-center py-3">
                            <div class="flex items-center">
                                <span class="flag-icon flag-icon-tr mr-3 text-2xl">🇹🇷</span>
                                <span class="font-medium">Turkey</span>
                            </div>
                            <span class="text-gray-600">Istanbul Office</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- contact info --}}
            <div class="contact-info rounded-xl shadow-lg mt-8 p-8 text-primary">
                <h2 class="text-2xl font-bold mb-6">Contact Information</h2>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-xl w-8"></i>
                        </div>
                        <p class="ml-4">123 Business Avenue, Central District, Hong Kong</p>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-phone text-xl w-8"></i>
                        </div>
                        <p class="ml-4">+852 1234 5678</p>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-envelope text-xl w-8"></i>
                        </div>
                        <p class="ml-4">info@apex-scrap.com</p>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-clock text-xl w-8"></i>
                        </div>
                        <p class="ml-4">Monday - Friday: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>

            </div>


        </section>





    </div>




    <script>
        // Initialize the map
        function initMap() {
            // Create a map centered in Asia
            const map = L.map('map').setView([30, 100], 3);

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
