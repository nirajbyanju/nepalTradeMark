<header id="header-bg"
    class="text-white fixed top-0 left-0 w-full z-40 border-b border-gray-700 shadow-lg transition-colors duration-200">
    <div class="container mx-auto flex justify-between md:justify-center items-center">
        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <a href="#" class="flex items-center space-x-2 hover:opacity-80">
                <div class="w-16">
                    <img src="{{ asset('image/logo.png') }}" alt="OpsHub" class="w-auto h-16">
                </div>
                <div>
                    <span class="text-lg font-bold block leading-tight">Nepal Trademark</span>
                    <span class="text-sm text-gray-400">Attorneys</span>
                </div>
            </a>
        </div>

        <!-- Vertical Divider -->
        <div class="h-14 w-px bg-gray-500 mx-4 hidden md:block"></div>

        <!-- Navigation -->
        <nav class="hidden lg:text-2xl md:flex items-center space-x-12 lg:space-x-16">
            <a href="{{ url('/') }}"
                class="{{ Request::is('/') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition">
                Home
            </a>
            <a href="{{ route('our-services') }}"
                class="{{ Route::is('our-services') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition">
                Our Services
            </a>
            <a href="{{ route('about-us') }}"
                class="{{ Route::is('about-us') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition">
                About Us
            </a>
            <a href="#" class="hover:text-[#EAB308] transition">
                Blogs
            </a>
            <a href="{{ route('contact-us') }}"
                class="{{ Route::is('contact-us') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition">
                Contact Us
            </a>
            <a href="#" class="hover:text-[#EAB308] transition flex items-center space-x-1 hidden xl:block">
                <i class="fa-solid fa-phone-volume"></i>
                <span>+977-01-5100223</span>
            </a>
        </nav>
        <button class="md:hidden text-gray-300 hover:text-white focus:outline-none focus:text-white"
            aria-label="Open Menu" onclick="toggleMenu()">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16m-7 6h7" stroke-width="2" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-gray-800 px-6 py-4">
        <a href="" class="block py-2 text-lg hover:text-gray-300 transition">Home</a>
        <a href="#" class="block py-2 text-lg hover:text-gray-300 transition">Our Services</a>
        <a href="#" class="block py-2 text-lg hover:text-gray-300 transition">About Us</a>
        <a href="#" class="block py-2 text-lg hover:text-gray-300 transition">Blogs</a>
        <a href="#" class="block py-2 text-lg hover:text-gray-300 transition">Contact Us</a>
        <a href="#" class="block py-2 text-lg hover:text-gray-300 transition flex items-center space-x-2">
            <i class="fa-solid fa-phone-volume"></i>
            <span>+977-01-5100223</span>
        </a>
    </div>
</header>

<script>
    // Add scroll event listener to window
    window.addEventListener("scroll", () => {
        const header = document.getElementById("header-bg");
        const scrollPosition = window.scrollY;

        if (scrollPosition) {
            header.classList.add("bg-[#1c4980]");
        } else {
            header.classList.remove("bg-[#1c4980]");
        }
    });

    // Mobile menu toggle
    function toggleMenu() {
        const menu = document.getElementById("mobileMenu");
        menu.classList.toggle("hidden");
    }
</script>
