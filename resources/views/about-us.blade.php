@extends('layouts.layout')
@section('title', 'About Us')
@section('content')
    <div>
        <div class="relative bg-cover bg-center h-72" style="background-image: url('{{ asset('image/slider.avif') }}');">
            <div class="relative flex flex-col items-center justify-center pt-10 h-full text-center text-white">
                <h1 class="text-3xl font-bold">About Us</h1>
                <p class="text-sm mt-2">Home / About Us</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center p-8 bg-white">
            <div>
                <img src="{{ asset('image/about-us.avif') }}" alt="About Us"
                    class="col-span-2 row-span-2 w-[550px] object-cover">
            </div>
            <div class="mt-8 md:mt-0 md:ml-10 max-w-lg text-left">
                <h2 class="text-3xl font-bold text-blue-900">
                    Nepal Trademark Attorneys
                </h2>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed dapibus nunc. Vestibulum non sem
                    convallis, malesuada libero sit amet, pellentesque augue. Duis aliquam sit amet tellus ac convallis.
                    Praesent eget consequat lorem. Cras non mattis est. In hac habitasse platea dictumst.
                </p>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    Vivamus imperdiet tempus enim, at sollicitudin ligula ornare dignissim. Donec sit amet augue lorem.
                    Donec enim nunc, pretium vel molestie a, maximus vitae sem.
                </p>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    Nulla ac ultrices tellus, id accumsan dui. Donec blandit turpis quis hendrerit auctor. Mauris libero
                    est, posuere nec magna et, cursus pharetra augue.
                </p>
            </div>
        </div>
        <div class="flex justify-center gap-6 p-8 bg-gray-100">
            <div class="bg-gray-200 p-6 rounded-lg shadow-md w-1/4">
              <h2 class="text-xl font-bold text-blue-800 mb-4">Our Mission</h2>
              <p class="text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed dapibus nunc.
                Vestibulum non sem convallis, malesuada libero sit amet, pellentesque augue.
              </p>
            </div>
            <div class="bg-gray-200 p-6 rounded-lg shadow-md w-1/4">
              <h2 class="text-xl font-bold text-blue-800 mb-4">Our Vision</h2>
              <p class="text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed dapibus nunc.
                Vestibulum non sem convallis, malesuada libero sit amet, pellentesque augue.
              </p>
            </div>
            <div class="bg-gray-200 p-6 rounded-lg shadow-md w-1/4">
              <h2 class="text-xl font-bold text-blue-800 mb-4">Our Goals</h2>
              <p class="text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed dapibus nunc.
                Vestibulum non sem convallis, malesuada libero sit amet, pellentesque augue.
              </p>
            </div>
          </div>
          
    </div>
@endsection
