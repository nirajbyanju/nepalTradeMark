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
    <div class="container bg-white py-8 px-6 sm:px-12 md:px-16 lg:px-20 xl:px-24 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 main-text-color">Trademark Renewal in Nepal</h1>
        
        <h2 class="text-2xl font-semibold main-text-color mb-4">Renewal of Trademark</h2>
        <p class="main-text-color mb-6"><strong>Validity:</strong> The validity of a trademark registration certificate is seven years from the date of registration. Thereafter, the trademark must be renewed every seven years to maintain its registration.</p>
        
        <p class="main-text-color mb-6"><strong>Time Frame:</strong> The renewal application can be filed within 35 days from the date of expiry.</p>
        
        <p class="main-text-color mb-6"><strong>Grace Period:</strong> If the renewal application is not filed within the initial 35-day period, it can still be submitted within an additional six months with a penalty or late fees.</p>
        
        <p class="main-text-color mb-6"><strong>Restoration of Registration:</strong> If the registrant fails to renew the trademark within the prescribed time frame, re-registration is the only way to restore the trademark registration.</p>
        
        <h2 class="text-2xl font-semibold main-text-color mb-4">Filing Requirements for Renewal of Trademark in Nepal</h2>
        <ul class="list-disc list-inside main-text-color space-y-2">
            <li><strong>Application and Power of Attorney:</strong> Duly signed, sealed, and countersigned by two witnesses of the registrant company.</li>
            <li><strong>Original Nepalese Registration Certificate:</strong> Required for endorsement.</li>
        </ul>
    </div>
    
    
    <div class="bg-white bg-opacity-80  my-9">
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
                <a href="{{ url('/registrating') }}"
                    class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg hover:text-white hover:border-white hover:bg-[#1C4980]">
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
                <a href="{{ url('monitoring') }}"
                    class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg hover:text-white hover:border-white hover:bg-[#1C4980]">
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
                <a href="{{ url('enforcement') }}"
                    class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg hover:text-white hover:border-white hover:bg-[#1C4980]">
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
                <a href="{{ url('renewal') }}"
                    class="inline-block px-8 py-2 text-sm font-medium text-[#1C4980] border-gry-500 border-[3px] rounded-lg hover:text-white hover:border-white hover:bg-[#1C4980]">
                    Read More
                </a>
            </div>
        </div>
    </div>
@endsection
