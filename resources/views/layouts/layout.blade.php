<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @yield('meta')
    <title> @yield('title')</title>
    @include('include.head')
    <link rel="icon" href="{{ asset('opcn/images/opsh1.png') }}" type="image/x-icon" sizes="16x16">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Replace "your-kit-code" with your unique code from Font Awesome -->
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="{{ asset('image/logo-2.png') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FD7WLS0DC6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FD7WLS0DC6');
    </script>
</head>

<body>
    <div id="page-loader" class="fixed inset-0 flex items-center justify-center bg-[#fff] z-[9999] w-full h-full">
        <div class="flex justify-center items-center">
            <div class="relative inline-flex">
                <div class="w-8 h-8 bg-blue-500 rounded-full"></div>
                <div class="w-8 h-8 bg-blue-500 rounded-full absolute top-0 left-0 animate-ping"></div>
                <div class="w-8 h-8 bg-blue-500 rounded-full absolute top-0 left-0 animate-pulse"></div>
            </div>
        </div>
    </div>
    
    

    @include('include.header')
    @include('include.alert')
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
    @include('include.footer')
    @include('include.script')
    <script>
        // Simulate loading and hide loader
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                document.getElementById("page-loader").style.display = "none";
                document.getElementById("main-content").classList.remove("hidden");
            }, 700);
        });
    </script>
</body>

</html>
