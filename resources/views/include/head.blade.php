<style>
    @import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wdth,wght@0,75..100,100..900;1,75..100,100..900&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap') * {
        margin: 0;
        padding: 0;
        font-family: 'mulish', sans-serif;
    }

    .main-font {
        font-family: 'Zilla Slab', serif;
    }

    .second-font {
        font-family: 'mulish', sans-serif;
    }

    .main-text-color {
        color: #1C4980;
    }

    .mission-vission {
        background-image: url('{{ asset('image/mission-vission.avif') }}');
    }

    .background-images {
        background-image: url('{{ asset('image/expertise.avif') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .our-mission {
        background-image: url('{{ asset('image/our-mission.avif') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .blue-filter {
        filter: hue-rotate(180deg);
    }

    .our-vision {
        background-image: url('{{ asset('image/our-vision.avif') }}');
    }

    .footerbackground {
        background-image: url('{{ asset('image/mission-vission.avif') }}');
        background-color: #45414d;
        padding: 40px 0;
        background-position: center;
        background-size: cover;
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 9s linear infinite;
    }

    .whatsapp-widget {
        position: fixed;
        bottom: 70px;
        right: 40px;
        background-color: #25D366;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 1000;
        transition: background-color 0.3s ease;
    }

    .whatsapp-widget:hover {
        background-color: #128C7E;
    }

    .whatsapp-widget img {
        width: 40px;
        height: 40px;
    }

    .whatsapp-chat-popup {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 10px;
        width: 300px;
        height: 400px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 10px;
        z-index: 1001;
        border: 1px solid #ddd;
    }

    .whatsapp-chat-popup iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .about-us-bg {
        background-image: url('{{ asset('image/blue-bg.avif') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .wraper {
        margin-left: auto;
        margin-right: auto;
        max-width: 1140px;
    }

    .black-overlay {
        text-align: center;
        background: radial-gradient(50% 50.00% at 50% 50.00%, #0A1D35 0%, rgba(10, 29, 53, 0.70) 0.01%, #0A1D35 100%);
        background-blend-mode: multiply;
        color: #fff;
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .black-overlay,
    .banner-header-section h1.page-title {
        transition: opacity .3s;
    }

    @keyframes hoverEffect {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.1);
            opacity: 0.9;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .hover-effect {
        animation: hoverEffect 0.5s ease-in-out;
    }

    #header-bg {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .fixed {
        transform: translateY(0);
        animation: fixedheader 600ms ease 0ms 1 forwards;
    }

    @keyframes fixedheader {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(0);
        }
    }

    .shape-image {
        max-width: 276px !important;
    }

    input:-webkit-autofill,
    textarea:-webkit-autofill {
        box-shadow: 0 0 0px 1000px transparent inset !important;
        -webkit-box-shadow: 0 0 0px 1000px transparent inset !important;
        transition: background-color 5000s ease-in-out 0s;
    }

    input:-webkit-autofill:focus,
    textarea:-webkit-autofill:focus {
        box-shadow: 0 0 0px 1000px transparent inset !important;
        -webkit-box-shadow: 0 0 0px 1000px transparent inset !important;
    }
</style>
