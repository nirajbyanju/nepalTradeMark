@extends('layouts.layout')
@section('title', 'Our Services')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-72" style="background-image: url('{{ asset('image/slider.avif') }}');">
          
                <div class="relative flex flex-col items-center justify-center pt-10 h-full text-center text-white">
                    <h1 class="text-3xl font-bold">Our Services</h1>
                    <p class="text-sm mt-2">Home / Our Services</p>
                </div>
        </div>
    </div>
    <div class="bg-cover bg-center py-12" style="background-image: url('contract-background.jpg');">
        <div class="bg-white bg-opacity-80 p-8 mx-auto max-w-7xl">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
              <div class="text-yellow-600 mb-4">
                <!-- Replace with appropriate icon -->
                <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l2 7h7l-5 3.5L18 21l-6-4.5L6 21l2-8.5L2 9h7l3-7z" />
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-blue-900 mb-2">Registration of Trademark</h3>
              <p class="text-sm text-gray-700 mb-4">
                Legal advice is the giving of a <strong>Professional</strong> or formal opinion regarding the substance or procedure of the <strong>law</strong> in relation to a particular factual situation.
              </p>
              <a href="#" class="text-blue-700 border border-blue-700 px-4 py-2 rounded-full hover:bg-blue-700 hover:text-white transition">
                Continue reading
              </a>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
              <div class="text-yellow-600 mb-4">
                <!-- Replace with appropriate icon -->
                <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l2 7h7l-5 3.5L18 21l-6-4.5L6 21l2-8.5L2 9h7l3-7z" />
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-blue-900 mb-2">Monitoring of Trademark</h3>
              <p class="text-sm text-gray-700 mb-4">
                Legal advice is the giving of a <strong>Professional</strong> or formal opinion regarding the substance or procedure of the <strong>law</strong> in relation to a particular factual situation.
              </p>
              <a href="#" class="text-blue-700 border border-blue-700 px-4 py-2 rounded-full hover:bg-blue-700 hover:text-white transition">
                Continue reading
              </a>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
              <div class="text-yellow-600 mb-4">
                <!-- Replace with appropriate icon -->
                <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l2 7h7l-5 3.5L18 21l-6-4.5L6 21l2-8.5L2 9h7l3-7z" />
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-blue-900 mb-2">Enforcement of Trademark</h3>
              <p class="text-sm text-gray-700 mb-4">
                Legal advice is the giving of a <strong>Professional</strong> or formal opinion regarding the substance or procedure of the <strong>law</strong> in relation to a particular factual situation.
              </p>
              <a href="#" class="text-blue-700 border border-blue-700 px-4 py-2 rounded-full hover:bg-blue-700 hover:text-white transition">
                Continue reading
              </a>
            </div>
    
            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
              <div class="text-yellow-600 mb-4">
                <!-- Replace with appropriate icon -->
                <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l2 7h7l-5 3.5L18 21l-6-4.5L6 21l2-8.5L2 9h7l3-7z" />
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-blue-900 mb-2">Trademark Renewal</h3>
              <p class="text-sm text-gray-700 mb-4">
                Legal advice is the giving of a <strong>Professional</strong> or formal opinion regarding the substance or procedure of the <strong>law</strong> in relation to a particular factual situation.
              </p>
              <a href="#" class="text-blue-700 border border-blue-700 px-4 py-2 rounded-full hover:bg-blue-700 hover:text-white transition">
                Continue reading
              </a>
            </div>
    
          </div>
        </div>
      </div>
      \
      <div class="max-w-6xl mx-auto py-10 px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Card Item -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Search of availability of trade/Service mark</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Filing trademark application, prosecution to issuance registration certificate</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Filing opposition, revocation of mark</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Filing counter reply to opposition and official refusal objection</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Filing petition against infringement/unauthorized use of TM</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Filing counter reply to infringement/unauthorized use of TM</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Renewal of trade/Service mark</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Recordals of assignment, licensing, change of name, address, merge</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Obtaining certified copy of registration certificate</h3>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="icon.svg" alt="Icon" class="w-10 h-10">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Trademark Watch service</h3>
            </div>
        </div>
    </div>
@endsection
