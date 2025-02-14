<header id="header-bg"
    class="text-white {{ Request::is('/') ? 'fixed' : 'relative' }} {{ Request::is('/') ? 'fixed' : 'bg-[#0A1D35]' }}  top-0 left-0 w-full z-40 border-b border-gray-700 shadow-lg transition-colors duration-200">
    <div class="container h-[100px] px-10 mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-2 hover:opacity-80">
                <div class="w-16">
                    <img src="{{ asset('image/logo.png') }}" alt="NepalTrademark" class="w-auto h-16">
                </div>
                <div>
                    <span class="text-lg font-semibold block leading-tight main-font">Nepal Trademark</span>
                    <span class="text-lg font-semibold block leading-tight main-font">Attorneys Inc.</span>
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
        <div id="slideMenu"
            class="fixed top-0 left-0 w-[80%] h-screen bg-[#1C4980] z-[99999] transition-transform duration-1000 translate-x-full shadow-lg">
            <div class="w-full h-full max-h-full overflow-y-auto relative">
    
                <!-- Close Button -->
                <div class="flex justify-end text-white font-semibold text-lg mt-3 mr-5 cursor-pointer"
                    onclick="toggleMenu()">
                    <i class="fas fa-times text-2xl transform transition-transform duration-300 hover:rotate-180 hover:text-[#0EA5EA]"></i>
                </div>
    
                <nav class="mt-5">
                    <div class="nav-logo pl-5 text-center">
                        <a href="{{ url('/') }}" class="flex items-center space-x-2 hover:opacity-80">
                            <div class="w-16">
                                <img src="{{ asset('image/logo.png') }}" alt="NepalTrademark" class="w-auto h-16">
                            </div>
                            <div>
                                <span class="text-lg font-semibold block leading-tight main-font text-white">Nepal Trademark</span>
                                <span class="text-lg font-semibold block leading-tight main-font text-white">Attorneys Inc.</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="mt-5 pt-5">
                        <ul>
                            <li class="border-t border-gray-700 px-5 py-3 group hover:bg-[#0EA5EA] transition-all duration-300">
                                <a href="{{ url('/') }}"
                                    class="block text-white text-sm font-medium uppercase transition-all duration-300 group-hover:text-white group-hover:pl-4">
                                    <i class="fas fa-home mr-2"></i> Home
                                </a>
                            </li>
                            <li class="border-t border-gray-700 px-5 py-3 group hover:bg-[#0EA5EA] transition-all duration-300">
                                <a href="{{ url('/ourServices') }}"
                                    class="block text-white text-sm font-medium uppercase transition-all duration-300 group-hover:text-white group-hover:pl-4">
                                    <i class="fas fa-book mr-2"></i> Our Services
                                </a>
                            </li>
                            <li class="border-t border-gray-700 px-5 py-3 group hover:bg-[#0EA5EA] transition-all duration-300">
                                <a href="{{ url('/about-us') }}"
                                    class="block text-white text-sm font-medium uppercase transition-all duration-300 group-hover:text-white group-hover:pl-4">
                                    <i class="fas fa-user-tie mr-2"></i> About Us
                                </a>
                            </li>
                            <li class="border-t border-gray-700 px-5 py-3 group hover:bg-[#0EA5EA] transition-all duration-300">
                                <a href="#"
                                    class="block text-white text-sm font-medium uppercase transition-all duration-300 group-hover:text-white group-hover:pl-4">
                                    <i class="fas fa-briefcase mr-2"></i> Blogs
                                </a>
                            </li>
                            <li class="border-t border-gray-700 px-5 py-3 group hover:bg-[#0EA5EA] transition-all duration-300">
                                <a href="{{ url('/contact-us') }}"
                                    class="block text-white text-sm font-medium uppercase transition-all duration-300 group-hover:text-white group-hover:pl-4">
                                    <i class="fas fa-user-tie mr-2"></i> Contact Us
                                </a>
                            </li>
                        </ul>
                        <div class="nav-logo pl-5 text-center mt-5">
                            <p class="text-white mt-3 text-sm">Kathmandu Ward No.32, G.P.O.BOX 20481
                                Near Kotadevi Mandir, Kathmandu, Nepal</p>
                            <a href="tel:+9779849728134" class="hover:text-[#EAB308] block transition-all duration-300">+977-9849728134</a>
                            <a href="tel:+977015100223" class="hover:text-[#EAB308] block transition-all duration-300">+977-01-5100223</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
    function debounce(func, wait = 10) {
        let timeout;
        return function(...args) {
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
