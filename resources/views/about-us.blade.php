@extends('layouts.layout')
@section('title', 'About Us')
@section('content')
    <div>
        <section class="relative">
            <div class="relative flex justify-center overflow-hidden">
                <img src="{{ asset('image/our-history.jpg') }}" alt="About Banner"
                    class="object-cover object-[50%_20%] w-full h-[30vh]">
                <div class="absolute inset-0 bg-gradient-to-b from-[#0A1D35] to-[rgba(10,29,53,0.7)]"></div>
                <div class="absolute inset-0 flex justify-center items-center text-white px-4">
                    <div class="banner-header-content text-center">
                        <h1 class="page-title text-4xl lg:text-4xl font-normal font-serif">
                            About Us
                        </h1>
                        <ul class="breadcrumb fadeInUp animated flex justify-center gap-3 mt-4 text-base lg:text-lg">
                            <li class="crumb cl"><a class="color-white hover:text-yellow-400" href="home.html">Home</a></li>
                            <li class="crumb"><span>/</span></li>
                            <li class="crumb current color-yellow">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="flex flex-col md:flex-row items-center justify-center p-8 bg-white">
            <div>
                <img src="{{ asset('image/about-us.avif') }}" alt="About Us"
                    class="col-span-2 row-span-2 w-[550px] object-cover">
            </div>
            <div class="mt-8 md:mt-0 md:ml-10 max-w-lg text-left">
                <h2 class="text-3xl font-bold main-text-color">
                    Nepal Trademark Attorneys Inc.
                </h2>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    Nepal Trademark Attorneys Inc., we are dedicated to providing expert trademark registration and protection
                    services in Nepal. Our goal is to help individuals, businesses, and organizations secure their brand
                    identity by complying with Nepalese Trademark Law and international standards. Whether it’s company
                    names, logos, slogans, or designs, we ensure your intellectual property is legally protected and
                    distinguishable in the marketplace.
                </p>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    Nepal’s membership in WIPO and the Paris Convention for the Protection of Industrial Property allows
                    trademark applicants to benefit from global protection and priority claims. Our team leverages these
                    advantages to simplify the registration process, ensuring compliance with national and international
                    regulations. With a focus on professionalism and efficiency, we handle all aspects of the process to
                    save you time and effort.
                </p>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    We take pride in empowering businesses to thrive by safeguarding their creative assets. Partner with us
                    to protect your trademarks and build a strong foundation for your brand.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-6 p-8 bg-gray-100">
            <div
                class="w-full sm:w-1/2 lg:w-1/4 relative z-10 p-10 bg-white rounded-lg shadow-lg transition duration-300 ease-in-out overflow-hidden">
                <div class="relative z-20 flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full">
                    <img src="{{ asset('image/vision.avif ') }}" alt="Icon" class="w-14 h-14">
                    <span class="absolute top-0 right-2 w-6 h-6 bg-[#EAB308] rounded-full"></span>
                    <span class="absolute bottom-0 left-6 w-3 h-3 bg-[#EAB308] rounded-full"></span>
                </div>
                <div class="absolute top-6 right-10 text-[100px] leading-none font-bold text-gray-400 opacity-30">01</div>
                <h2 class="text-2xl font-bold main-text-color mt-6 mb-2">Our Mission</h2>
                <p class="text-gray-400 text-justify"> Our mission is to empower businesses and individuals by providing
                    seamless trademark registration and
                    protection services. We aim to safeguard intellectual property rights, ensuring brands remain unique and
                    secure, fostering innovation and growth in Nepal’s competitive marketplace.</p>
                <div
                    class="absolute bottom-[-200px] left-0 w-full opacity-0 transition duration-300 ease-in-out bg-gradient-to-r from-blue-400 to-blue-600 h-44 pointer-events-none">
                </div>
                <div class="absolute bottom-[-73px] right-[-28px] w-28 h-28 bg-[#EAB308] opacity-60 rounded-full"></div>
                <div class="absolute bottom-[-28px] right-[-73px] w-28 h-28 bg-[#EAB308] opacity-60 rounded-full"></div>
            </div>

            <div
                class="w-full sm:w-1/2 lg:w-1/4 relative z-10 p-10 bg-white rounded-lg shadow-lg transition duration-300 ease-in-out overflow-hidden">
                <div class="relative z-20 flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full">
                    <img src="{{ asset('image/shared-vision.avif') }}" alt="Icon" class="w-14 h-14">
                    <span class="absolute top-0 right-2 w-6 h-6 bg-[#EAB308] rounded-full"></span>
                    <span class="absolute bottom-0 left-6 w-3 h-3 bg-[#EAB308] rounded-full"></span>
                </div>
                <div class="absolute top-6 right-10 text-[100px] leading-none font-bold text-gray-400 opacity-30">02</div>
                <h2 class="text-2xl font-bold main-text-color mt-6 mb-2">Our Vision</h2>
                <p class="text-gray-400 text-justify"> Our vision is to become Nepal’s most trusted partner in intellectual
                    property protection, enabling
                    brands to thrive locally and globally. By upholding integrity, professionalism, and excellence, we
                    aspire to create a robust ecosystem for safeguarding creative assets and fostering economic growth.</p>
                <div
                    class="absolute bottom-[-200px] left-0 w-full opacity-0 transition duration-300 ease-in-out bg-gradient-to-r from-blue-400 to-blue-600 h-44 pointer-events-none">
                </div>
                <div class="absolute bottom-[-73px] right-[-28px] w-28 h-28 bg-[#EAB308] opacity-60 rounded-full"></div>
                <div class="absolute bottom-[-28px] right-[-73px] w-28 h-28 bg-[#EAB308] opacity-60 rounded-full"></div>
            </div>

            <div
                class="w-full sm:w-1/2 lg:w-1/4 relative z-10 p-10 bg-white rounded-lg shadow-lg transition duration-300 ease-in-out overflow-hidden">
                <div class="relative z-20 flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full">
                    <img src="{{ asset('image/targeting.avif') }}" alt="Icon" class="w-14 h-14">
                    <span class="absolute top-0 right-2 w-6 h-6 bg-[#EAB308] rounded-full"></span>
                    <span class="absolute bottom-0 left-6 w-3 h-3 bg-[#EAB308] rounded-full"></span>
                </div>
                <div class="absolute top-6 right-10 text-[100px] leading-none font-bold text-gray-400 opacity-30">Goal</div>
                <h2 class="text-2xl font-bold main-text-color mt-6 mb-2">Our Goals</h2>
                <p class="text-gray-400 text-justify">Our goal is to streamline the trademark registration process, educate
                    clients about their intellectual
                    property rights, and deliver personalized solutions. We strive to ensure every client enjoys
                    comprehensive protection for their brand identity while navigating the legal landscape with confidence.
                </p>
                <div
                    class="absolute bottom-[-200px] left-0 w-full opacity-0 transition duration-300 ease-in-out bg-gradient-to-r from-blue-400 to-blue-600 h-44 pointer-events-none">
                </div>
                <div class="absolute bottom-[-73px] right-[-28px] w-28 h-28 bg-[#EAB308] opacity-60 rounded-full"></div>
                <div class="absolute bottom-[-28px] right-[-73px] w-28 h-28 bg-[#EAB308] opacity-60 rounded-full"></div>
            </div>
        </div>
    </div>
@endsection
