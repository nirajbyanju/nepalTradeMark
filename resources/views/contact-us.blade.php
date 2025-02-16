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
                            Contact Us
                        </h1>
                        <ul class="breadcrumb fadeInUp animated flex justify-center gap-3 mt-4 text-base lg:text-lg">
                            <li class="crumb cl"><a class="color-white hover:text-yellow-400" href="home.html">Home</a></li>
                            <li class="crumb"><span>/</span></li>
                            <li class="crumb current color-yellow">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="max-w-7xl mx-auto p-12">
            <div class="flex flex-col md:flex-row items-start justify-between gap-12">
                <!-- Left Section -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-4xl font-bold mb-6 main-font main-text-color">Nepal Trademark Attorneys Inc.</h2>
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
                                Kathmandu Ward No. 30<br>
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
        </div> --}}
        <div class="max-w-7xl mx-auto p-12 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-lg">
            <div class="flex flex-col md:flex-row items-start justify-between gap-12">
                <!-- Left Section -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-5xl font-bold mb-8 main-text-color font-sans">Nepal Trademark Attorneys Inc.</h2>
                    <div class="flex items-center gap-2 mb-8">
                        <img src="{{ asset('image/shape.png') }}" alt="Contact Us" class="shape-image w-100 ">
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                        Lawyers are involved in many of the largest and most complex transactions in the region.
                        Renowned for the quality of work of the lawyers, our team provides the best legal advice.
                    </p>
                    <div class="space-y-6 text-gray-700">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('image/icons-1.png') }}" alt="Phone" class="w-8 h-8">
                            </div>
                            <div>
                                <a href="tel:+97701-5100223" class="text-xl text-gray-900 hover:text-blue-600 transition-colors">
                                    +977-01-5100223
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('image/icons-2.png') }}" alt="Email" class="w-8 h-8">
                            </div>
                            <div>
                                <a href="mailto:info@nepaltrademark.com" class="text-xl text-gray-900 block hover:text-blue-600 transition-colors">
                                    info@nepaltrademark.com
                                </a>
                                <a href="mailto:tm@nepaltrademark.com" class="text-xl text-gray-900 block hover:text-blue-600 transition-colors">
                                    tm@nepaltrademark.com
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('image/icons-3.png') }}" alt="Location" class="w-8 h-8">
                            </div>
                            <a class="text-xl text-gray-900 block hover:text-blue-600 transition-colors" href="https://www.google.com/maps/dir//%E0%A4%A8%E0%A5%87%E0%A4%AA%E0%A4%BE%E0%A4%B2+%E0%A4%9F%E0%A5%8D%E0%A4%B0%E0%A5%87%E0%A4%A1%E0%A4%AE%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%95+%E0%A4%B5%E0%A4%95%E0%A5%80%E0%A4%B2%E0%A4%B9%E0%A4%B0%E0%A5%81+%E0%A4%87%E0%A4%82%E0%A4%95+M8FW%2BXQ4+Surya+Kot+Marg+Kathmandu+44600/@27.6748969,85.3469483,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x39eb19f1a61bab37:0x9ed8dae913f6c9d1"
                                target="_blank" rel="noopener noreferrer">
                                Kathmandu Ward No. 32<br>
                                Near Kotadevi Mandir, Kathmandu, Nepal
                            </a>
                        </div>
                    </div>
                </div>
        
                <!-- Right Section -->
                <div class="w-full md:w-1/2 bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-5xl font-bold mb-8  font-sans main-text-color">Have Any Questions?</h2>
                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                        With extensive experience, we advise top national and international companies.
                    </p>
                    <form class="space-y-6" method="POST" action="{{ route('mail-contact') }}">
                        @csrf
                        <!-- Full Name -->
                        <div class="relative z-0 w-full group">
                            <input 
                                type="text" 
                                name="name" 
                                id="input-full-name" 
                                class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-full-name" 
                                class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                        </div>
        
                        <!-- Email -->
                        <div class="relative z-0 w-full group">
                            <input 
                                type="email" 
                                name="email" 
                                id="input-email" 
                                class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-email" 
                                class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Email <span class="text-red-500">*</span>
                            </label>
                        </div>
        
                        <!-- Company Name -->
                        <div class="relative z-0 w-full group">
                            <input 
                                type="text" 
                                name="company_name" 
                                id="input-company-name" 
                                class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-company-name" 
                                class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Company Name <span class="text-red-500">*</span>
                            </label>
                        </div>
        
                        <!-- Phone Number -->
                        <div class="relative z-0 w-full group">
                            <input 
                                type="text" 
                                name="phone_number" 
                                id="input-phone-number" 
                                class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " 
                                required />
                            <label 
                                for="input-phone-number" 
                                class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                        </div>
        
                        <!-- Message -->
                        <div class="relative z-0 w-full group">
                            <textarea 
                                name="message" 
                                id="input-message" 
                                class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " 
                                required></textarea>
                            <label 
                                for="input-message" 
                                class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Message <span class="text-red-500">*</span>
                            </label>
                        </div>
        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 text-lg rounded-md hover:bg-blue-700 transition-colors">
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
