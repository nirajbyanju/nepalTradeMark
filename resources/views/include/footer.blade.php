<footer class="bg-[#1C4980] text-white hidden md:block">
    <div class="container mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-12">
        <!-- Logo and Tagline -->
        <div>
            <a href="#" class="flex items-center gap-4 hover:text-gray-300">
                <img src="{{ asset('image/logo.png') }}" alt="OpsHub Logo" class="w-24 h-auto">
                <div>
                    <h2 class="text-xl font-bold">Nepal Trademark Attorneys</h2>
                    <p class="text-white text-sm mt-1">Delivering excellence and trust in every service we provide.</p>
                </div>
            </a>
        </div>

        <!-- Services -->
        <div>
            <h3 class="text-lg font-semibold border-gray-700 pb-2 mb-4">Services</h3>
            <ul class="space-y-3">
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Registration of Trademark</a>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Monitoring of Trademark (Watch)</a>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Enforcement of Trademark</a>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Trademark Renewal</a>
                </li>
            </ul>
        </div>

        <!-- Practice Areas -->
        <div>
            <h3 class="text-lg font-semibold border-gray-700 pb-2 mb-4">Our Practice Areas</h3>
            <ul class="space-y-3">
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Intellectual Property</a>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Trademark Protection</a>
                </li>
                <li class="flex items-center gap-2">
                   <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Patent Protection</a>
                </li>
                <li class="flex items-center gap-2">
                   <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Industrial Design Protection</a>
                </li>
                <li class="flex items-center gap-2">
                   <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">IP Watch</a>
                </li>
                <li class="flex items-center gap-2">
                   <i class="fa-solid fa-circle text-[8px] text-white"></i>
                    <a href="#" class="hover:text-gray-300">Copyright Protection</a>
                </li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-semibold border-gray-700 pb-2 mb-4">Contact</h3>
            <ul class="space-y-4">
                <li class="flex gap-4">
                    <i class="fa-solid fa-location-dot text-white text-lg"></i>
                    <span>
                        Kathmandu Ward No.30, G.P.O.BOX 20481<br>
                        Near Kotadevi Mandir, Kathmandu, Nepal
                    </span>
                </li>
                <li class="flex gap-4">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-7 h-7 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <div>
                        <a href="tel:+9779849728134" class="hover:text-gray-300 block">+977-9849728134</a>
                        <a href="tel:+977015100223" class="hover:text-gray-300 block">+977-01-5100223</a>
                    </div>
                </li>
                <li class="flex gap-4 text-white">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-7 h-7 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <div>
                        <a href="mailto:info@nepaltrademark.com" class="hover:text-gray-300 block">info@nepaltrademark.com</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-[#1C4980] py-4 border-t-2 border-white">
        <div class="container mx-auto px-6 text-center">
            <p class="text-white text-sm">Nepal Trademark Attorneys &copy; 2020 All Rights Reserved</p>
        </div>
    </div>
</footer>
<footer class="block md:hidden">
    <div
        class="flex justify-between bg-[#1C4980] fixed bottom-0 left-0 w-full p-3 z-30 border-t border-gray-300">
        <div class="flex flex-col items-center">
            <a href="{{ url('/') }}" class="flex flex-col items-center text-white hover:text-gray-300">
                <div class="server-icon text-xl">
                    <i class="fas fa-home"></i> <!-- FontAwesome Home Icon -->
                </div>
                <span class="font-semibold text-xs">
                    Home
                </span>
            </a>
        </div>
        <div class="flex flex-col items-center">
            <a href="{{ url('/frontlearn-view') }}" class="flex flex-col items-center text-white">
                <div class="server-icon text-xl">
                    <i class="fas fa-book"></i> <!-- FontAwesome Book Icon -->
                </div>
                <span class="font-semibold text-xs">
                    Our Services
                </span>
            </a>
        </div>
        <div class="flex flex-col items-center">
            <a href="{{ url('frontpratie-view') }}" class="flex flex-col items-center text-white">
                <div class="server-icon text-xl">
                    <i class="fas fa-info-circle"></i> <!-- FontAwesome Info Circle Icon -->
                </div>
                <span class="font-semibold text-xs">
                    About Us
                </span>
            </a>
        </div>
        <div class="flex flex-col items-center">
            <a href="{{ url('frontopportunity-view') }}" class="flex flex-col items-center text-white">
                <div class="server-icon text-xl">
                    <i class="fas fa-blog"></i> <!-- FontAwesome Blog Icon -->
                </div>
                <span class="font-semibold text-xs">
                    Blogs
                </span>
            </a>
        </div>
        <div class="flex flex-col items-center">
            <a href="{{ url('frontvacancy-view') }}" class="flex flex-col items-center text-white">
                <div class="server-icon text-xl">
                    <i class="fas fa-envelope"></i> <!-- FontAwesome Envelope Icon -->
                </div>
                <span class="font-semibold text-xs">
                    Contact Us
                </span>
            </a>
        </div>
    </div>
</footer>


