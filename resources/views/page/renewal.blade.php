@extends('layouts.layout')
@section('title', 'Trademark renewal in Nepal')
@section('content')
    <section class="relative">
        <div class="relative flex justify-center overflow-hidden">
            <img src="{{ asset('image/our-history.jpg') }}" alt="About Banner"
                class="object-cover object-[50%_20%] w-full h-[30vh]">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0A1D35] to-[rgba(10,29,53,0.7)]"></div>
            <div class="absolute inset-0 flex justify-center items-center text-white px-4">
                <div class="banner-header-content text-center">
                    <h1 class="page-title text-4xl lg:text-4xl font-normal font-serif">
                        Trademark renewal in Nepal
                    </h1>
                    <ul class="breadcrumb fadeInUp animated flex justify-center gap-3 mt-4 text-base lg:text-lg">
                        <li class="crumb cl"><a class="color-white hover:text-yellow-400" href="{{ url('/') }}">Home</a></li>
                        <li class="crumb"><span>/</span></li>
                        <li class="crumb current color-yellow">Trademark renewal in Nepal</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container bg-white py-6 px-44 rounded-lg">
        <div class="mb-6">
            <h2 class="text-xl font-semibold main-text-color">a. Validity:</h2>
            <p class="main-text-color">The validity of registration certificate of trademark is seven years from the date of registration. Thereafter trademark must be renewed in every seven years to maintain its registration.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold main-text-color">b. Time Frame:</h2>
            <p class="main-text-color">Renewal application can be file within 35 days from the date of expiry.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold main-text-color">c. Grace Period:</h2>
            <p class="main-text-color">Renewal application can be filed another six months after the expiry of above 35 days with penalty/ late fees.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold main-text-color">d. Restoration of registration:</h2>
            <p class="main-text-color">If registrant fails to renew his/her trademark within prescribed time frame, re-registration is the only way to restore the registration of trademark.</p>
        </div>

        <h2 class="text-2xl font-bold main-text-color mb-4">Filing requirements for renewal of Trademark in Nepal</h2>
        <div class="bg-gray-50 p-4 rounded-lg shadow-md">
            <ul class="list-disc list-inside main-text-color">
                <li><strong>Application and power of Attorney, </strong> duly signed, sealed and countersigned by two witnesses of the registrant company.</li>
                <li><strong>Original Nepalese Registration Certificate </strong> for endorse.</li>
            </ul>
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
