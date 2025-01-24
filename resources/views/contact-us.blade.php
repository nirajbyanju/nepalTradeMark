{{-- @extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-72" style="background-image: url('{{ asset('image/slider.avif') }}');">
            <div class="relative flex flex-col items-center justify-center pt-10 h-full text-center text-white">
                <h1 class="text-3xl font-bold">Contact Us</h1>
                <p class="text-sm mt-2">Home / Contact Us</p>
            </div>
        </div>
        <div class="relative my-12 py-8 flex items-center justify-center about-us-bg">
            <div class="max-w-8xl mx-auto ">
                <div class="">
                    <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0 lg:space-x-8">
                        <!-- Submit Section -->
                        <div class="text-center">
                            <h2 class="text-4xl font-bold main-font main-text-color mb-2">Submit</h2>
                            <p class="text-4xl font-bold main-font main-text-color mb-2">Quick Query</p>
                        </div>

                        <!-- Phone Call Section -->
                        <div class="text-center">
                            <h2 class="text-4xl font-bold main-font main-text-color mb-2">Phone Call</h2>
                            <a href="tel:+97701-5100223" class="text-xl main-text-color main-text-color">
                                +977-01-5100223
                            </a>
                        </div>

                        <!-- Email Us Section -->
                        <div class="text-center">
                            <h2 class="text-4xl font-bold main-font main-text-color mb-2">Email Us</h2>
                            <div class="flex gap-5">
                                <a href="mailto:info@nepaltrademark.com" class="text-xl main-text-color block">
                                    info@nepaltrademark.com
                                </a>
                                <a href="mailto:tm@nepaltrademark.com" class="text-xl main-text-color block">
                                    tm@nepaltrademark.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Image Section -->
                    <div class="relative">
                        <img src="{{ asset('image/contact-us.avif') }}" alt="Contact Us"
                            class="w-full rounded-lg shadow-lg">
                        <div class="absolute top-0 left-0 w-full h-full bg-indigo-900 bg-opacity-30 rounded-lg"></div>
                    </div>

                    <!-- Form Section -->
                    <div>
                        <form class="p-6 bg-white rounded-xl shadow-md space-y-5" action="{{ route('mail-contact') }}"
                            method="post">
                            @csrf
                            <!-- Full Name -->
                            <div class="flex flex-col">
                                <label for="name" class="text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" name="name" id="name" placeholder="Full Name"
                                    class="mt-2 py-3 px-4 rounded-lg bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-900">
                            </div>

                            <!-- Email -->
                            <div class="flex flex-col">
                                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="mt-2 py-3 px-4 rounded-lg bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-900">
                            </div>

                            <!-- Company Name -->
                            <div class="flex flex-col">
                                <label for="tel" class="text-sm font-medium text-gray-700">Company Name</label>
                                <input type="text" name="company_name" id="company_name" placeholder="Company Name"
                                    class="mt-2 py-3 px-4 rounded-lg bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-900">
                            </div>

                            <!-- Phone Number -->
                            <div class="flex flex-col">
                                <label for="tel" class="text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="tel" name="phone_number" id="tel" placeholder="Phone Number"
                                    class="mt-2 py-3 px-4 rounded-lg bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-900">
                            </div>

                            <!-- Message -->
                            <div class="flex flex-col">
                                <label for="message" class="text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="5" placeholder="Your message here..."
                                    class="mt-2 py-3 px-4 rounded-lg bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-900"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit"
                                    class="w-full bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="relative overflow-hidden h-96 w-full rounded-lg mb-10">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.44227745476!2d85.3420805!3d27.6752486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a61bab37%3A0x9ed8dae913f6c9d1!2sNepal+Trademark+Attorneys+Inc.!5e0!3m2!1sen!2snp!4v1448010837890"
            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    </div>
@endsection --}}


@extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')
    <div>
        <section class="relative">
            <div class="relative flex justify-center overflow-hidden">
                <img src="{{ asset('image/contact-us.jpg') }}" alt="About Banner"
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

        <div class="max-w-7xl mx-auto p-12">
            <div class="flex flex-col md:flex-row items-start justify-between gap-12">
                <!-- Left Section -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-4xl font-bold mb-6 main-font main-text-color">Nepal Trademark Attorneys</h2>
                    <div class="flex items-center gap-2 mb-8">
                        <img src="{{ asset('image/shape.png') }}" alt="Contact Us" class="shape-image w-100">
                    </div>
                    <p class="text-[#45566C] text-lg leading-relaxed mb-8">
                        Lawyers are involved in many of the largest and most complex transactions in the region.
                        Renowned for the quality of work of the lawyers, our team provides the best legal advice.
                    </p>
                    <div class="space-y-6 text-[#45566C]">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('image/icons-1.png') }}" alt="Contact Us" class="w-14 h-14">
                            <div>
                                <a href="tel:+97701-5100223" class="text-xl text-[#45566C] hover:text-yellow-500">
                                    +977-01-5100223
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('image/icons-2.png') }}" alt="Contact Us" class="w-14 h-14">
                            <div>
                                <a href="mailto:info@nepaltrademark.com" class="text-xl text-[#45566C] block hover:text-yellow-500">
                                    info@nepaltrademark.com
                                </a>
                                <a href="mailto:tm@nepaltrademark.com" class="text-xl text-[#45566C] block hover:text-yellow-500">
                                    tm@nepaltrademark.com
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('image/icons-3.png') }}" alt="Contact Us" class="w-14 h-14">
                            <a class="text-xl text-[#45566C] block hover:text-yellow-500" href="https://www.google.com/maps/dir//%E0%A4%A8%E0%A5%87%E0%A4%AA%E0%A4%BE%E0%A4%B2+%E0%A4%9F%E0%A5%8D%E0%A4%B0%E0%A5%87%E0%A4%A1%E0%A4%AE%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%95+%E0%A4%B5%E0%A4%95%E0%A5%80%E0%A4%B2%E0%A4%B9%E0%A4%B0%E0%A5%81+%E0%A4%87%E0%A4%82%E0%A4%95+M8FW%2BXQ4+Surya+Kot+Marg+Kathmandu+44600/@27.6748969,85.3469483,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x39eb19f1a61bab37:0x9ed8dae913f6c9d1"
                                target="_blank" rel="noopener noreferrer">
                                Kathmandu Ward No. 30, G.P.O.BOX 20481<br>
                                Near Kotadevi Mandir, Kathmandu, Nepal
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Right Section -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-4xl font-bold mb-6 main-font main-text-color">Have Any Questions?</h2>
                    <div class="flex items-center gap-2 mb-8">
                        <img src="{{ asset('image/shape.png') }}" alt="Contact Us" class="shape-image w-100">
                    </div>
                    <p class="text-[#45566C] text-lg leading-relaxed mb-8">
                        With extensive experience, we advise top national and international companies.
                    </p>
                    <form class="space-y-6 contact-form" method="POST" action="{{ route('mail-contact') }}">
                        @csrf
                        <div class="relative z-0 w-full mb-6 group">
                            <input 
                                type="text" 
                                name="name" 
                                id="input-full-name" 
                                class="block py-4 px-0 w-full text-lg text-[#45566C] bg-transparent border-0 border-b-2 border-[#1C4980] appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-full-name" 
                                class="absolute text-xl text-[#45566C] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                        </div>
                    
                        <!-- Email -->
                        <div class="relative z-0 w-full mb-6 group">
                            <input 
                                type="email" 
                                name="email" 
                                id="input-email" 
                                class="block py-4 px-0 w-full text-lg text-[#45566C] bg-transparent border-0 border-b-2 border-[#1C4980] appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-email" 
                                class="absolute text-xl text-[#45566C] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Email <span class="text-red-500">*</span>
                            </label>
                        </div>
                    
                        <!-- Company Name -->
                        <div class="relative z-0 w-full mb-6 group">
                            <input 
                                type="text" 
                                name="company_name" 
                                id="input-company-name" 
                                class="block py-4 px-0 w-full text-lg text-[#45566C] bg-transparent border-0 border-b-2 border-[#1C4980] appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-company-name" 
                                class="absolute text-xl text-[#45566C] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Company Name <span class="text-red-500">*</span>
                            </label>
                        </div>
                    
                        <!-- Phone Number -->
                        <div class="relative z-0 w-full mb-6 group">
                            <input 
                                type="text" 
                                name="phone_number" 
                                id="input-phone-number" 
                                class="block py-4 px-0 w-full text-lg text-[#45566C] bg-transparent border-0 border-b-2 border-[#1C4980] appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-phone-number" 
                                class="absolute text-xl text-[#45566C] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                        </div>
                    
                        <!-- Message -->
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea 
                                name="message" 
                                id="input-message" 
                                class="block py-4 px-0 w-full text-lg text-[#45566C] bg-transparent border-0 border-b-2 border-[#1C4980] appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer" 
                                placeholder=" " 
                                required></textarea>
                            <label 
                                for="input-message" 
                                class="absolute text-xl text-[#45566C] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Message <span class="text-red-500">*</span>
                            </label>
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-[#1C4980] text-white py-4 px-6 text-lg rounded-md hover:bg-yellow-500 transition">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        

    </div>
    <div class="relative overflow-hidden h-96 w-full rounded-lg mb-10">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.44227745476!2d85.3420805!3d27.6752486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a61bab37%3A0x9ed8dae913f6c9d1!2sNepal+Trademark+Attorneys+Inc.!5e0!3m2!1sen!2snp!4v1448010837890"
            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    </div>
@endsection
