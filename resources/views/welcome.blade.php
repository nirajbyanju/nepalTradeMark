@extends('layouts.layout')
@section('title', 'Welcome')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('image/slider1.avif') }}');">
            <div class="relative container mx-auto grid grid-cols-1 md:grid-cols-2 items-center h-full px-8 gap-8">
                <div class="hidden md:block flex flex-col justify-center items-center space-y-6">
                    <div class="hidden md:flex flex-col justify-center items-center space-y-6">
                        <div class="relative w-32 h-32 md:w-40 md:h-40 flex justify-center items-center">
                            <a class="cursor-pointer group" onclick="openModal()">
                                <svg class="absolute inset-0 animate-spin-slow text-gray-200" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="circlePath" fill="none" d="M50,10 a40,40 0 1,1 0,80 a40,40 0 1,1 0,-80" />
                                    <text fill="#ffffff" font-size="12" font-weight="bold" text-anchor="middle">
                                        <textPath href="#circlePath" startOffset="50%">
                                            Nepal Trademark Attorneys Inc. • Since 2007 •
                                        </textPath>
                                    </text>
                                </svg>
                                <button
                                    class="w-16 h-16 md:w-20 md:h-20 rounded-full flex justify-center items-center shadow-lg transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 text-white"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11.596 8.697L6.692 11.396A1 1 0 0 1 5 10.6V5.4a1 1 0 0 1 1.692-.802l4.904 2.698a1 1 0 0 1 0 1.798z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="youtubeModal"
                        class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden w-11/12 md:w-3/4 max-w-2xl">
                            <div class="relative">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/-7NBMy4NrFE?si=395EwpNdd6gFwb0i"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <button class="absolute top-2 right-2 text-gray-700 hover:text-gray-900"
                                    onclick="closeModal()">
                                    ✕
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-white max-w-2xl flex flex-col align-center md:items-end text-right ml-auto">
                    <div>
                        <p class=" uppercase tracking-wide font-semibold mb-4 main-font text-2xl">EXPERT TEAM</p>
                        <div class="flex gap-4 items-end justify-end mb-2">
                            <span class="text-4xl md:text-6xl font-bold leading-tight main-font">
                                We WORk
                                For Client
                            </span>
                        </div>
                        <h2 class="text-4xl md:text-6xl font-bold leading-tight main-font">Legal Success</h2>
                        <p class="mt-6 text-base md:text-lg mb-3 second-font">
                            Our experienced team offers tailored legal solutions to ensure the success of every case.
                            Partner with us for unparalleled expertise and dedication.
                        </p>
                        <div class="mt-16">
                            <button class="relative inline-block font-medium  group py-4 px-10 text-lg">
                                <span
                                    class="absolute inset-0 w-full h-full transition-transform duration-300 ease-out transform translate-x-1 translate-y-1 bg-yellow-500 group-hover:translate-x-0 group-hover:translate-y-0">
                                </span>
                                <span
                                    class="absolute inset-0 w-full h-full bg-[#1B2839] border border-yellow-500 group-hover:bg-[#1C4980] group-hover:border-0">
                                </span>
                                <a href="{{ url('/contact-us') }}" class="relative text-white main-font text-lg">Get
                                    Started</a>
                            </button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="">
        <div class="bg-blue-50 py-12">
            <div class="text-center mb-16">
                <p class="text-xl main-text-color font-medium tracking-wide main-font mb-2">Multidisciplinary Team</p>
                <h2 class="text-5xl font-semibold main-text-color main-font">
                    We <span class="text-yellow-500">Expertise </span>
                    On
                </h2>
                <p class="mt-4 main-text-color text-lg max-w-3xl mx-auto second-font">
                    A professionally managed law firm, Nepal Trade Attorneys is regularly engaged for thoughtful and
                    reliable IP
                    solutions by its clients. The firm balances commercial realities with legal pragmatism.
                </p>
            </div>
            <div
                class="container background-images py-24 mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center group transition-all duration-300 transform">
                    <div class="flex justify-center mb-4">
                        <span class="border-[3px] border-gray-500 rounded-md transition-all duration-300 ">
                            <img src="{{ asset('image/icon-1.png') }}" alt="Trademark Renewal" class="w-12 h-12 m-4 0 ">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font transition-colors duration-300 ">
                        Registration of Trademark
                    </h3>
                    <p class="mt-4 main-text-color text-sm mx-auto second-font mb-3 transition-colors duration-300">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of the law in relation to a particular factual situation.
                    </p>
                    <a href="{{ url('/registrating') }}"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gray-500 border-[3px] rounded-lg transition-all duration-300 hover:text-white hover:border-white hover:bg-[#1C4980]">
                        Read More
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center group transition-all duration-300 transform">
                    <div class="flex justify-center mb-4">
                        <span class="border-[3px] border-gray-500 rounded-md transition-all duration-300">
                            <img src="{{ asset('image/icon-2.png') }}" alt="Trademark Renewal" class="w-12 h-12 m-4 0 ">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font transition-colors duration-300 ">
                        Monitoring of Trademark
                    </h3>
                    <p class="mt-4 main-text-color text-sm mx-auto second-font mb-3 transition-colors duration-300 ">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of the law in relation to a particular factual situation.
                    </p>
                    <a href="{{ url('monitoring') }}"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gray-500 border-[3px] rounded-lg transition-all duration-300 hover:text-white hover:border-white hover:bg-[#1C4980]">
                        Read More
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center group transition-all duration-300 transform ">
                    <div class="flex justify-center mb-4">
                        <span class="border-[3px] border-gray-500 rounded-md transition-all duration-300 ">
                            <img src="{{ asset('image/icon-3.png') }}" alt="Trademark Renewal" class="w-12 h-12 m-4 0">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font transition-colors duration-300  ">
                        Enforcement of Trademark
                    </h3>
                    <p class="mt-4 main-text-color text-sm mx-auto second-font mb-3 transition-colors duration-300 ">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of the law in relation to a particular factual situation.
                    </p>
                    <a href="{{ url('enforcement') }}"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gray-500 border-[3px] rounded-lg transition-all duration-300 hover:text-white hover:border-white hover:bg-[#1C4980]">
                        Read More
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center group transition-all duration-300 transform ">
                    <div class="flex justify-center mb-4">
                        <span class="border-[3px] border-gray-500 rounded-md transition-all duration-300 ">
                            <img src="{{ asset('image/icon-4.png') }}" alt="Trademark Renewal" class="w-12 h-12 m-4 0 ">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font transition-colors duration-300">
                        Trademark Renewal
                    </h3>
                    <p class="mt-4 main-text-color text-sm mx-auto second-font mb-3 transition-colors duration-300">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of the law in relation to a particular factual situation.
                    </p>
                    <a href="{{ url('renewal') }}"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gray-500 border-[3px] rounded-lg transition-all duration-300 hover:text-white hover:border-white hover:bg-[#1C4980]">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-50 py-12">
        <div class="container mx-auto mt-12 px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="flex justify-center lg:justify-end hidden md:block">
                <img src="{{ asset('image/image-1.avif') }}" alt="Lady Justice image-animation"
                    class="max-w-sm object-contain" />
            </div>
            <div class="lg:col-span-2">
                <div class="container mx-auto mb-4 px-6 lg:px-16 text-center">
                    <p class="text-xl main-text-color font-medium tracking-wide main-font mb-2">
                        Why Go With Our Legal Company
                    </p>
                    <h2 class="text-5xl font-semibold main-text-color main-font">
                        Commitment <span class="text-yellow-500">&</span> Compassion, Care
                    </h2>
                    <p class="mt-4 main-text-color text-lg max-w-3xl mx-auto second-font">
                        At the heart of our practice are Compassion, Care, and Commitment. We
                        understand that legal matters can be overwhelming, which is why we
                        approach every case with empathy and dedication. Our team is driven by a
                        genuine passion for delivering tailored solutions.
                    </p>
                </div>
                <div class="text-center mb-8">
                    <button
                        class="text-white uppercase px-8 py-3 rounded-md text-xl font-medium mission-vission main-font transition duration-300 transform hover:text-yellow-500">
                        Mission & Vision
                    </button>
                </div>
                <div class="w-100 flex justify-end items-center">
                    <div class="grid w-[800px] grid-cols-1 md:grid-cols-2 gap-8">
                        <div
                            class="bg-white rounded-lg our-mission overflow-hidden group transition duration-300 transform hover:shadow-xl">
                            <div
                                class="relative text-left mt-28 bg-[#282b30] w-full p-4 opacity-80 group-hover:opacity-100 transition duration-300">
                                <h3 class="text-2xl font-bold text-white main-font">Our Mission</h3>
                                <p class="text-lg text-white second-font text-justify">
                                    At the heart of our practice are Compassion, Care, and Commitment.
                                    We understand that legal matters can be overwhelming, which is why
                                    we approach every case with empathy and dedication. Our team is
                                    driven by a genuine passion for delivering tailored solutions.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg our-vision overflow-hidden group transition duration-300 transform hover:shadow-xl">
                            <div
                                class="relative mt-28 bg-[#282b30] w-full p-4 opacity-80 group-hover:opacity-100 transition duration-300">
                                <h3 class="text-2xl font-bold text-white main-font">Our Vision</h3>
                                <p class="text-lg text-white second-font text-justify">
                                    Our vision is to become a trusted partner for our clients, providing
                                    innovative legal strategies and unparalleled support. We aim to set
                                    a benchmark for excellence in the legal profession by fostering
                                    meaningful relationships and delivering impactful results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openModal() {
            const modal = document.getElementById('youtubeModal');
            const video = document.getElementById('youtubeVideo');
            modal.classList.remove('hidden');
            video.src = "https://youtu.be/HAcLoqZO-Z0?si=3XOPtpEC_E33iuZ4?autoplay=1";
        }

        function closeModal() {
            const modal = document.getElementById('youtubeModal');
            const video = document.getElementById('youtubeVideo');
            modal.classList.add('hidden');
            video.src = "";
        }
    </script>
@endsection
