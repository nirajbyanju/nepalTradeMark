<header id="header-bg"
    class="text-white {{ Request::is('/') ? 'fixed' : 'relative' }} {{ Request::is('/') ? 'fixed' : 'bg-[#0A1D35]' }}  top-0 left-0 w-full z-40 border-b border-gray-700 shadow-lg transition-colors duration-200">
    <div class="container h-[100px] px-10 mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <a href="#" class="flex items-center space-x-2 hover:opacity-80">
                <div class="w-16">
                    <img src="{{ asset('image/logo.png') }}" alt="OpsHub" class="w-auto h-16">
                </div>
                <div>
                    <span class="text-lg font-semibold block leading-tight main-font">Nepal Trademark</span>
                    <span class="text-sm text-white main-font">Attorneys</span>
                </div>
            </a>
        </div>

        <div class="h-14 w-px bg-gray-500 mx-4 hidden md:block"></div>

        <!-- Navigation -->
        <nav class="hidden lg:text-2xl md:flex items-center space-x-12 lg:space-x-16">
            <a href="{{ url('/') }}"
                class="{{ Request::is('/') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition main-font">
                Home
            </a>
            <a href="{{ route('our-services') }}"
                class="{{ Route::is('our-services') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition main-font">
                Our Services
            </a>
            <a href="{{ route('about-us') }}"
                class="{{ Route::is('about-us') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition main-font">
                About Us
            </a>
            <a href="#" class="hover:text-[#EAB308] transition">
                Blogs
            </a>
            <a href="{{ route('contact-us') }}"
                class="{{ Route::is('contact-us') ? 'text-[#EAB308]' : 'hover:text-[#EAB308]' }} transition main-font">
                Contact Us
            </a>
        </nav>
        <div>
            <a href="#"
                class="bg-yellow-500 p-5 hover:bg-transparent hover:border-yellow-500 hover:border-2 border-2 border-transparent transition-all duration-300 ease-in-out flex items-center space-x-1 hidden xl:block main-font group">
                <i class="fa-solid fa-phone-volume group-hover:hover-effect"></i>
                <span class="group-hover:hover-effect">+977-01-5100223</span>
            </a>

        </div>
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
    function debounce(func, wait = 10) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }
    function handleScroll() {
        const header = document.getElementById("header-bg");
        const scrollPosition = window.scrollY;
        const pathname = window.location.pathname;

        if (scrollPosition > 0) {
            header.classList.add("bg-[#0A1D35]", "fixed");
            header.classList.remove("relative");
        } else {
            if (pathname !== "/") {
                header.classList.remove("fixed");
                header.classList.add("relative", "bg-[#0A1D35]");
            } else {
                header.classList.remove("bg-[#0A1D35]");
            }
        }
    }

    // Add scroll event listener
    window.addEventListener("scroll", debounce(handleScroll));

    // Mobile menu toggle
    function toggleMenu() {
        const menu = document.getElementById("mobileMenu");
        menu.classList.toggle("hidden");
    }
</script>

