@extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-72" style="background-image: url('{{ asset('image/slider.avif') }}');">
            <div class="relative flex flex-col items-center justify-center pt-10 h-full text-center text-white">
                <h1 class="text-3xl font-bold">Contact Us</h1>
                <p class="text-sm mt-2">Home / Contact Us</p>
            </div>
        </div>
        <div class="relative flex items-center justify-center min-h-screen bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mt-12 p-6 bg-gray-50 rounded-lg shadow-lg">
                    <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0 lg:space-x-8">
                      <!-- Submit Section -->
                      <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Submit</h2>
                        <p class="text-lg text-gray-600">Quick Query</p>
                      </div>
                  
                      <!-- Phone Call Section -->
                      <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Phone Call</h2>
                        <a 
                          href="tel:+97701-5100223" 
                          class="text-lg text-blue-600 hover:text-blue-800"
                        >
                          +977-01-5100223
                        </a>
                      </div>
                  
                      <!-- Email Us Section -->
                      <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Email Us</h2>
                        <div class="flex gap-5">
                          <a 
                            href="mailto:info@nepaltrademark.com" 
                            class="text-lg text-blue-600 hover:text-blue-800 block"
                          >
                            info@nepaltrademark.com
                          </a>
                          <a 
                            href="mailto:tm@nepaltrademark.com" 
                            class="text-lg text-blue-600 hover:text-blue-800 block"
                          >
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
                            <form class="p-6 bg-white rounded-xl shadow-md space-y-6" action="{{ route('mail-contact') }}"
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
        <div class="relative overflow-hidden h-86 w-full rounded-lg mb-10">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.44227745476!2d85.3420805!3d27.6752486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a61bab37%3A0x9ed8dae913f6c9d1!2sNepal+Trademark+Attorneys+Inc.!5e0!3m2!1sen!2snp!4v1448010837890"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>


    </div>
@endsection
