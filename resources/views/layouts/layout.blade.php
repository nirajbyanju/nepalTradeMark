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
    <div id="page-loader" class="fixed inset-0 flex items-center justify-center bg-[#1C4980] z-50">
        <!-- Spinner -->
        <div class="flex items-center justify-center w-full h-full text-white ">
            <div>
                <h1 class="text-xl md:text-7xl font-bold flex items-center">L<svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="animate-spin" height="1em"
                        width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM13.6695 15.9999H10.3295L8.95053 17.8969L9.5044 19.6031C10.2897 19.8607 11.1286 20 12 20C12.8714 20 13.7103 19.8607 14.4956 19.6031L15.0485 17.8969L13.6695 15.9999ZM5.29354 10.8719L4.00222 11.8095L4 12C4 13.7297 4.54894 15.3312 5.4821 16.6397L7.39254 16.6399L8.71453 14.8199L7.68654 11.6499L5.29354 10.8719ZM18.7055 10.8719L16.3125 11.6499L15.2845 14.8199L16.6065 16.6399L18.5179 16.6397C19.4511 15.3312 20 13.7297 20 12L19.997 11.81L18.7055 10.8719ZM12 9.536L9.656 11.238L10.552 14H13.447L14.343 11.238L12 9.536ZM14.2914 4.33299L12.9995 5.27293V7.78993L15.6935 9.74693L17.9325 9.01993L18.4867 7.3168C17.467 5.90685 15.9988 4.84254 14.2914 4.33299ZM9.70757 4.33329C8.00021 4.84307 6.53216 5.90762 5.51261 7.31778L6.06653 9.01993L8.30554 9.74693L10.9995 7.78993V5.27293L9.70757 4.33329Z">
                        </path>
                    </svg> ading . . .</h1>
            </div>
        </div>
    </div>
    <div class="whatsapp-widget">
        <a href="https://api.whatsapp.com/send/?phone=9843906039&text=Hello+there%21+I+have+a+query.&type=phone_number&app_absent=0">
            <img src="{{ asset('image/whatapp.avif') }}" alt="WhatsApp Icon">
        </a>
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
