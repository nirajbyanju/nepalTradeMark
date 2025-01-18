@extends('layouts.layout')
@section('title', 'Welcome')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('image/slider1.avif') }}');">
            <div class="relative container mx-auto grid grid-cols-1 md:grid-cols-2 items-center h-full px-8 gap-8">
                <div class="flex flex-col justify-center items-center space-y-6">
                    <div class="relative w-32 h-32 md:w-40 md:h-40 flex justify-center items-center">
                        <svg class="absolute inset-0n animate-spin-slow" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <path id="circlePath" fill="none" d="M50,10 a40,40 0 1,1 0,80 a40,40 0 1,1 0,-80" />
                            <text fill="#ffffff" font-size="12" font-weight="bold" text-anchor="middle">
                                <textPath href="#circlePath" startOffset="50%">
                                    Nepal Trademark Attorney • Since 2007 •
                                </textPath>
                            </text>
                        </svg>
                        <button class="w-12 h-12 md:w-16 md:h-16 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="w-6 h-6 text-white md:w-8 md:h-8" viewBox="0 0 16 16">
                                <path
                                    d="M11.596 8.697L6.692 11.396A1 1 0 0 1 5 10.6V5.4a1 1 0 0 1 1.692-.802l4.904 2.698a1 1 0 0 1 0 1.798z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="text-white max-w-2xl flex flex-col align-center md:items-end text-right ml-auto">
                    <div>
                        <p class="text-sm uppercase tracking-wide font-semibold mb-4 main-font text-4xl">EXPERT TEAM</p>
                        <div class="flex gap-4 items-end justify-end mb-2">
                            <span class="text-4xl md:text-5xl font-bold leading-tight main-font">
                                We WORk
                            </span>
                            <img src="{{ asset('image/image.avif') }}" alt="Arrow" class="w-26 h-10">
                            <span class="text-4xl md:text-5xl font-bold leading-tight main-font">
                                For
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold leading-tight main-font">Client Legal Success</h2>
                        <p class="mt-6 text-base md:text-lg mb-3 second-font">
                            Our experienced team offers tailored legal solutions to ensure the success of every case.
                            Partner with us for unparalleled expertise and dedication.
                        </p>
                        <div>
                            <a href="#" class="relative inline-block">
                                <span class="bg-[#192637] border-2 border-yellow-500 px-6 py-3 relative z-10"
                                    style="position: relative;">
                                    Get Started
                                </span>
                                <span
                                    class="bg-yellow-500 border-2 border-yellow-500 px-16 py-5 absolute left-2 z-0 h-2 w-30"
                                    style="position: absolute;">
                                </span>
                            </a>
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
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4 ">
                        <span class="border-[3px] border-gry-500 rounded-md">
                            <img src="{{ asset('image/icon-1.png') }}" alt="Registration of Trademark"
                                class="w-12 h-12  m-4">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font">Registration of Trademark</h3>
                    <p class="mt-4 main-text-color text-sm mx-auto  second-font mb-3">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of
                        the law in relation to a particular factual situation.
                    </p>
                    <a href="#"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg">
                        Read More
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4 ">
                        <span class="border-[3px] border-gry-500 rounded-md">
                            <img src="{{ asset('image/icon-2.png') }}" alt="Monitoring of Trademark" class="w-12 h-12  m-4">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font">Monitoring of Trademark</h3>
                    <p class="mt-4 main-text-color text-sm mx-auto  second-font mb-3">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of
                        the law in relation to a particular factual situation.
                    </p>
                    <a href="#"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg">
                        Read More
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4 ">
                        <span class="border-[3px] border-gry-500 rounded-md">
                            <img src="{{ asset('image/icon-3.png') }}" alt="Enforcement of Trademark"
                                class="w-12 h-12  m-4">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font">Enforcement of Trademark</h3>
                    <p class="mt-4 main-text-color text-sm mx-auto  second-font mb-3">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of
                        the law in relation to a particular factual situation.
                    </p>
                    <a href="#"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg">
                        Read More
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4 ">
                        <span class="border-[3px] border-gry-500 rounded-md">
                            <img src="{{ asset('image/icon-3.png') }}" alt="Trademark Renewal" class="w-12 h-12  m-4">
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold main-text-color mb-2 main-font">Trademark Renewal</h3>
                    <p class="mt-4 main-text-color text-sm mx-auto  second-font mb-3">
                        Legal advice is the giving of a Professional or formal opinion regarding the substance or procedure
                        of
                        the law in relation to a particular factual situation.
                    </p>
                    <a href="#"
                        class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-50 py-12">
        <div class="container mx-auto mt-12 px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="flex justify-center lg:justify-end">
                <img src="{{ asset('image/image-1.avif') }}" alt="Lady Justice" class="max-w-sm object-contain" />
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
                        class="text-white uppercase px-8 py-3 rounded-md text-xl font-medium  mission-vission main-font">
                        Mission & Vision
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white  rounded-lg our-mission">
                        <div class="relative mt-28 bg-[#282b30] w-full p-4 opacity-80">
                            <h3 class="text-2xl font-bold text-white main-font">Our Mission</h3>
                            <p class="text-lg text-white second-font">
                                At the heart of our practice are Compassion, Care, and Commitment.
                                We understand that legal matters can be overwhelming, which is why
                                we approach every case with empathy and dedication. Our team is
                                driven by a genuine passion for delivering tailored solutions.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white  rounded-lg our-vision">
                        <div class="relative mt-28 bg-[#282b30] w-full p-4 opacity-80">
                            <h3 class="text-2xl font-bold text-white main-font">Our Mission</h3>
                            <p class="text-lg text-white second-font">
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
    </div>

@endsection
