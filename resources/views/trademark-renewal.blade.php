@extends('layouts.layout')
@section('title', 'Welcome')
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
                        <li class="crumb"><a class="color-white hover:text-yellow-400"
                                href="javascript:void(0)">Pages</a></li>
                        <li class="crumb current color-yellow">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-6">
                <h2 class="text-4xl font-bold text-blue-600 leading-tight">Registration of Trademark in Nepal</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Trademark registration in Nepal is an essential step to protect your brand identity. This process secures exclusive rights for your trademark, ensuring that no one else can legally use a similar mark in commerce.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    To register a trademark or service mark in Nepal, specific documents and procedures must be followed, ensuring compliance with both domestic and international standards.
                </p>
            </div>
    
            <div class="space-y-6">
                <h2 class="text-4xl font-bold text-blue-600 leading-tight">Filing Requirements</h2>
                <ul class="list-inside list-disc text-lg text-gray-700 space-y-3">
                    <li>Application and Power of Attorney, duly signed, sealed, and counter-signed by two witnesses of the applicant company.</li>
                    <li>A Certified/Notarized copy of the Home/Foreign Registration Certificate of the mark in English.</li>
                    <li>Notarized/Certified copy of the Filing Receipt or application in English for priority claim applications.</li>
                    <li>Six specimens of the mark in the desired format.</li>
                    <li>The proposed specification of goods must align with the Home/Foreign registration certificate of the mark.</li>
                </ul>
            </div>
        </div>
    </section>
    
</div>
@endsection