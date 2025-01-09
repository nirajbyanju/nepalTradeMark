@extends('layouts.layout')
@section('title', 'Welcome')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('image/slider1.avif') }}');">
            <div class="relative container mx-auto grid grid-cols-1 md:grid-cols-2 items-center h-full px-8 gap-8">
                <!-- Left Section -->
                <div class="flex flex-col justify-center items-center space-y-6">
                    <div class="relative w-32 h-32 md:w-40 md:h-40 flex justify-center items-center">
                        <svg class="absolute inset-0" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <!-- Circular path -->
                            <path id="circlePath" fill="none" d="M50,10 a40,40 0 1,1 0,80 a40,40 0 1,1 0,-80" />
                            <!-- Text along the path -->
                            <text fill="#ffffff" font-size="12" font-weight="bold" text-anchor="middle">
                                <textPath href="#circlePath" startOffset="50%">
                                    Nepal Trademark Attorney • Since 2007 •
                                </textPath>
                            </text>
                        </svg>
                        <button class="w-12 h-12 md:w-16 md:h-16 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-white md:w-8 md:h-8" viewBox="0 0 16 16">
                                <path d="M11.596 8.697L6.692 11.396A1 1 0 0 1 5 10.6V5.4a1 1 0 0 1 1.692-.802l4.904 2.698a1 1 0 0 1 0 1.798z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Right Section -->
                <div class="text-white max-w-md flex flex-col md:items-end text-right ml-auto">
                    <div>
                        <p class="text-sm uppercase tracking-wide font-medium mb-4">EXPERT TEAM</p>
                        <h2 class="text-3xl md:text-4xl font-bold leading-tight">
                           We WORk For
                        </h2>
                        <h2>Client Legal Success</h2>
                        <p class="mt-6 text-base md:text-lg">
                            Our experienced team offers tailored legal solutions to ensure the success of every case. Partner with us for unparalleled expertise and dedication.
                        </p>
                        <div class="">
                            <a
                              href="#"
                              class="relative inline-flex items-center justify-center px-6 py-3 text-lg font-bold text-white bg-yellow-500 border-2 border-transparent group hover:bg-[#19202b] transition duration-300"
                            >
                              <!-- Gold Border -->
                              <span
                                class="absolute inset-0 border-2 border-[#f3c04c] translate-x-2 translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0 transition-transform duration-300"
                              ></span>
                          
                              <!-- Arrow Icon -->
                              <span class="mr-2 text-xl group-hover:-translate-x-1 transition-transform duration-300">
                                &larr;
                              </span>
                              Get Started
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-50 py-12">
        <!-- Section Heading -->
        <div class="text-center mb-16">
            <p class="text-sm uppercase text-blue-700 font-medium tracking-wide">Multidisciplinary Team</p>
            <h2 class="text-3xl font-bold text-blue-900">
                We <span class="text-yellow-500">Expertise On</span>
            </h2>
            <p class="mt-4 text-gray-600 text-base max-w-3xl mx-auto">
                A professionally managed law firm, Nepal Trade Attorneys is regularly engaged for thoughtful and reliable IP
                solutions by its clients. The firm balances commercial realities with legal pragmatism.
            </p>
        </div>

        <!-- Card Section -->
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="/path/to/icon1.svg" alt="Registration of Trademark" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-blue-900 mb-2">Registration of Trademark</h3>
                <p class="text-sm text-gray-600 mb-6">
                    Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure of
                    the law in relation to a particular factual situation.
                </p>
                <a href="#"
                    class="inline-block px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700">
                    Continue reading
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="/path/to/icon2.svg" alt="Monitoring of Trademark" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-blue-900 mb-2">Monitoring of Trademark</h3>
                <p class="text-sm text-gray-600 mb-6">
                    Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure of
                    the law in relation to a particular factual situation.
                </p>
                <a href="#"
                    class="inline-block px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700">
                    Continue reading
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="/path/to/icon3.svg" alt="Enforcement of Trademark" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-blue-900 mb-2">Enforcement of Trademark</h3>
                <p class="text-sm text-gray-600 mb-6">
                    Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure of
                    the law in relation to a particular factual situation.
                </p>
                <a href="#"
                    class="inline-block px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700">
                    Continue reading
                </a>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="/path/to/icon4.svg" alt="Trademark Renewal" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-blue-900 mb-2">Trademark Renewal</h3>
                <p class="text-sm text-gray-600 mb-6">
                    Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure of
                    the law in relation to a particular factual situation.
                </p>
                <a href="#"
                    class="inline-block px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700">
                    Continue reading
                </a>
            </div>
        </div>
    </div>
    <div class="bg-blue-50 py-12">
        <!-- Section Heading -->
        <div class="container mx-auto px-6 lg:px-16 text-center">
            <p class="text-sm uppercase text-blue-600 font-medium tracking-wide">
                Why Go With Our Legal Company
            </p>
            <h2 class="text-3xl font-bold text-blue-900 mt-2">
                Commitment <span class="text-yellow-500">&</span> Compassion, Care
            </h2>
            <p class="mt-4 text-gray-600 max-w-4xl mx-auto">
                At the heart of our practice are Compassion, Care, and Commitment. We
                understand that legal matters can be overwhelming, which is why we
                approach every case with empathy and dedication. Our team is driven by a
                genuine passion for delivering tailored solutions.
            </p>
        </div>

        <!-- Content Section -->
        <div class="container mx-auto mt-12 px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Image -->
            <div class="flex justify-center lg:justify-end">
                <img src="{{ asset('image/image-1.avif') }}" alt="Lady Justice" class="max-w-sm object-contain" />
            </div>

            <!-- Right Content -->
            <div class="lg:col-span-2">
                <!-- Mission & Vision Button -->
                <div class="text-center mb-8">
                    <button
                        class="bg-blue-900 text-white uppercase px-6 py-2 rounded-lg text-sm font-medium hover:bg-blue-700">
                        Mission & Vision
                    </button>
                </div>

                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Mission Card -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="/path/to/mission-image.jpg" alt="Mission"
                            class="w-full h-40 rounded-md object-cover mb-4" />
                        <h3 class="text-lg font-bold text-blue-900 mb-2">Our Mission</h3>
                        <p class="text-sm text-gray-600">
                            At the heart of our practice are Compassion, Care, and Commitment.
                            We understand that legal matters can be overwhelming, which is why
                            we approach every case with empathy and dedication. Our team is
                            driven by a genuine passion for delivering tailored solutions.
                        </p>
                    </div>

                    <!-- Vision Card -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="/path/to/vision-image.jpg" alt="Vision"
                            class="w-full h-40 rounded-md object-cover mb-4" />
                        <h3 class="text-lg font-bold text-blue-900 mb-2">Our Vision</h3>
                        <p class="text-sm text-gray-600">
                            At the heart of our practice are Compassion, Care, and Commitment.
                            We understand that legal matters can be overwhelming, which is why
                            we approach every case with empathy and dedication. Our team is
                            driven by a genuine passion for delivering tailored solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
