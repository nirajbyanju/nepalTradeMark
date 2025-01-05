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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    @include('include.header')
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
    @include('include.footer')
    @include('include.script')

</body>

</html>
