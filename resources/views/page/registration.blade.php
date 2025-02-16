@extends('layouts.layout')
@section('title', 'Registration of trademark in Nepal')
@section('content')
    <section class="relative">
        <div class="relative flex justify-center overflow-hidden">
            <img src="{{ asset('image/our-history.jpg') }}" alt="About Banner"
                class="object-cover object-[50%_20%] w-full h-[30vh]">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0A1D35] to-[rgba(10,29,53,0.7)]"></div>
            <div class="absolute inset-0 flex justify-center items-center text-white px-4">
                <div class="banner-header-content text-center">
                    <h1 class="page-title text-4xl lg:text-4xl font-normal font-serif">
                        Registration of trademark in Nepal
                    </h1>
                    <ul class="breadcrumb fadeInUp animated flex justify-center gap-3 mt-4 text-base lg:text-lg">
                        <li class="crumb cl"><a class="color-white hover:text-yellow-400"
                                href="{{ url('/') }}">Home</a></li>
                        <li class="crumb"><span>/</span></li>
                        <li class="crumb current color-yellow">Registration of trademark in Nepal</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container bg-white py-8 px-6 sm:px-12 md:px-16 lg:px-20 xl:px-24 rounded-lg">
        <h1 class="text-3xl font-bold mb-6 main-text-color">Filing Requirements for Trade/Service Mark Registration in Nepal
        </h1>
        <p class="main-text-color mb-6">The following are the essential filing requirements for trade/service mark
            registration in Nepal:</p>

        <div class="space-y-6">
            <div>
                <h2 class="text-xl font-semibold main-text-color">1. Application and Power of Attorney</h2>
                <p class="text-gray-700">Duly signed, sealed, and counter-signed by two witnesses of the applicant company.
                </p>
            </div>
            <div>
                <h2 class="text-xl font-semibold main-text-color">2. Certified/Notarized Copy of Registration Certificate
                </h2>
                <p class="text-gray-700">A certified/notarized copy of the Home/Foreign Registration Certificate of the mark
                    in English language.</p>
                <p class="text-gray-700">Or, a notarized/certified copy of the Filing Receipt or application in English
                    language in case of a Priority Claim application.</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold main-text-color">3. Six Specimens of the Mark</h2>
                <p class="text-gray-700">The applicant must provide six specimens of the mark for verification.</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold main-text-color">4. Proposed Specification of Goods</h2>
                <p class="text-gray-700">The proposed specification of goods must be identical to the Home/Foreign
                    Registration Certificate of the mark.</p>
            </div>
        </div>
    </div>


    <div class="my-9">
        <div class="container background-images py-24 mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white  rounded-lg p-6 text-center group transition-all duration-300 transform">
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
                <a href="{{ url('/registration') }}"
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
@endsection
