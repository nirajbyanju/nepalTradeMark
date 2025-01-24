@extends('layouts.layout')
@section('title', 'Our Services')
@section('content')
    <div>
        <section class="relative">
            <div class="relative flex justify-center overflow-hidden">
                <img src="{{ asset('image/about.jpg') }}" alt="About Banner"
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
                            <li class="crumb"><a class="color-white hover:text-yellow-400"
                                    href="javascript:void(0)">Pages</a></li>
                            <li class="crumb current color-yellow">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="bg-cover bg-center py-12" style="background-image: url('contract-background.jpg');">
        <div class="bg-white bg-opacity-80  mx-auto">
            <div class="container background-images py-24 mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
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
    <div class="max-w-6xl mx-auto py-10 px-4">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-semibold main-text-color main-font">
                Our <span class="text-yellow-500">Services</span>
            </h2>
            <p class="mt-4 main-text-color text-lg max-w-3xl mx-auto second-font">
                We as trademark attorney represent you here in Nepal for the following tasks:
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/search.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Search of availability of trade/Service mark</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-2.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Filing trademark application, prosecution to issuance registration certificate</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-3.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Filing opposition, revocation of mark</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-4.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Filing counter reply to opposition and official refusal objection</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-5.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Filing petition against infringement/unauthorized use of TM</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-6.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Filing counter reply to infringement/unauthorized use of TM</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-7.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Renewal of trade/Service mark</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-8.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Recordals of assignment, licensing, change of name, address, merge</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-9.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Obtaining certified copy of registration certificate</h3>
            </div>
        
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center hover:bg-blue-100 hover:shadow-xl transform hover:scale-105 hover:text-blue-600 transition-all duration-300 ease-in-out">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('image/gif/icon-10.png') }}" alt="Search of availability of trade/Service mark" class="w-14 h-14">
                </div>
                <h3 class="text-lg font-medium main-text-color">Trademark Watch service</h3>
            </div>
        </div>
        
    </div>
@endsection
