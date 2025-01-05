<header class="bg-[#1C4980] text-white">
    <div class="container mx-auto flex items-center justify-between px-4 py-4">
      <div class="text-2xl font-bold">
        <a href="#" class="hover:text-gray-300 flex relative">
            <div class="w-24 relative">
                <img src="{{ asset('image/logo.png') }}" alt="OpsHub" class="w-auto h-24 absolute left-0 top-0">
            </div>
            <span class="text-gray-300 text-lg">
                Nepal Trademark<br>
                Attorneys
            </span>
        </a>
      </div>
  
      <nav class="hidden md:flex space-x-12">
        <a href="#" class="hover:text-gray-300 text-xl">Home</a>
        <a href="#" class="hover:text-gray-300 text-xl">Our Services</a>
        <a href="#" class="hover:text-gray-300 text-xl">About US</a>
        <a href="#" class="hover:text-gray-300 text-xl">Blogs</a>
        <a href="#" class="hover:text-gray-300 text-xl">Contact Us</a>
        <a href="#" class="hover:text-gray-300 text-xl"><i class="fa-solid fa-phone-volume"></i> +977-01-5100223</a>
      </nav>
  
      <div class="hidden md:block">
       
      </div>
  
      <button
        class="md:hidden text-gray-400 hover:text-gray-300 focus:outline-none focus:text-gray-300"
        aria-label="Open Menu"
        onclick="toggleMenu()"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M3 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 6h14a1 1 0 010 2H3a1 1 0 010-2zm0 6h14a1 1 0 010 2H3a1 1 0 010-2z"
            clip-rule="evenodd"
          ></path>
        </svg> 
      </button>
    </div>
  
    <div id="mobileMenu" class="md:hidden hidden px-4 py-2 bg-gray-700">
      <a href="#" class="block py-2 hover:text-gray-300">Home</a>
      <a href="#" class="block py-2 hover:text-gray-300">About</a>
      <a href="#" class="block py-2 hover:text-gray-300">Services</a>
      <a href="#" class="block py-2 hover:text-gray-300">Contact</a>
    </div>
  </header>
  
  <script>
    function toggleMenu() {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("hidden");
    }
  </script>
  