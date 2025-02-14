@extends('layouts.layout')
@section('title', 'Enforcement of Trademark in Nepal')
@section('content')
    <section class="relative">
        <div class="relative flex justify-center overflow-hidden">
            <img src="{{ asset('image/our-history.jpg') }}" alt="About Banner"
                class="object-cover object-[50%_20%] w-full h-[30vh]">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0A1D35] to-[rgba(10,29,53,0.7)]"></div>
            <div class="absolute inset-0 flex justify-center items-center text-white px-4">
                <div class="banner-header-content text-center">
                    <h1 class="page-title text-4xl lg:text-4xl font-normal font-serif">
                        Enforcement of Trademark in Nepal
                    </h1>
                    <ul class="breadcrumb fadeInUp animated flex justify-center gap-3 mt-4 text-base lg:text-lg">
                        <li class="crumb cl"><a class="color-white hover:text-yellow-400" href="{{ url('/') }}">Home</a></li>
                        <li class="crumb"><span>/</span></li>
                        <li class="crumb current color-yellow">Enforcement of Trademark in Nepal</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container bg-white py-8 px-6 sm:px-12 md:px-16 lg:px-20 xl:px-24 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 main-text-color">Remedies for Trademark Infringement in Nepal</h1>
        <p class="main-text-color mb-6">Generally, trademark infringement occurs in three ways:</p>
    
        <div class="space-y-6">
            <div>
                <h2 class="text-xl font-semibold main-text-color">a. Trademark Piracy:</h2>
                <p class="text-gray-700">Trademark piracy means the registration or use of a well-known foreign trademark that is not registered in the country or is invalid as a result of non-use.</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold main-text-color">b. Counterfeiting:</h2>
                <p class="text-gray-700">Trademark counterfeiting is an egregious form of infringement. It involves the intentional use of a spurious mark identical to a registered mark on the same kind of goods or services.</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold main-text-color">c. Imitation of Labels and Packaging:</h2>
                <p class="text-gray-700">Instead of developing a unique label and packaging, the infringer copies the appearance of a competing product to create confusion in the marketplace.</p>
            </div>
        </div>
    
        <h2 class="text-2xl font-bold main-text-color mt-8 mb-4">Available Remedies</h2>
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold main-text-color mb-3">Civil Remedies:</h3>
            <ul class="list-disc list-inside main-text-color space-y-2">
                <li><strong>Injunction:</strong> To restrain others from using the mark.</li>
                <li><strong>Claim damages:</strong> Or an account for profit.</li>
                <li><strong>Seizure:</strong> Of the counterfeited goods for destruction.</li>
                <li><strong>Penalty:</strong> For these offences up to NPR 100,000.</li>
            </ul>
        </div>
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
