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
    <div class="container bg-white py-6 px-44 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-4 main-text-color">Remedies for Trademark Infringement in Nepal</h1>
        <p class="text-gray-700 mb-4">Generally, trademark infringement occurs in three ways:</p>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800">a. Trademark Piracy:</h2>
            <p class="text-gray-700">Generally, trademark piracy means the registration or use of a well-known foreign
                trademark that is not registered in the country or is invalid as a result of non-use.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800">b. Counterfeiting:</h2>
            <p class="text-gray-700">Trademark counterfeiting is an egregious form of trademark infringement. It entails
                intentional, knowing use of a spurious mark which is identical with a registered mark, on the same kind of
                goods or services for which the mark is registered.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800">c. Imitation of Labels and Packaging:</h2>
            <p class="text-gray-700">Instead of developing a unique label and packaging, the infringer copies the appearance
                of a competing product to create confusion in the marketplace.</p>
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mb-4">Available Remedies</h2>
        <div class="bg-gray-50 p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-800">Civil Remedies:</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Injunction</strong> to restrain others from using the mark.</li>
                <li><strong>Claim damages</strong> or an account for profit.</li>
                <li><strong>Seizure</strong> of the counterfeited goods for destruction.</li>
                <li><strong>Penalty</strong> for these offences up to NPR 100,000.</li>
            </ul>
        </div>
    </div>
@endsection
