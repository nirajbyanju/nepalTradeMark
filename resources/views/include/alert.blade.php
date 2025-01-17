<div class="fixed bottom-4 right-4 space-y-4 z-50 main-message-div">
    @if (session('success'))
        <div class="message-div bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-md relative transition-opacity duration-300">
            <span class="block sm:inline font-semibold">Success:</span> {{ session('success') }}
            <button class="absolute top-0 right-0 mt-1 mr-2 text-green-700 hover:text-green-900 focus:outline-none closebtnings">
                &times;
            </button>
        </div>
    @endif
    @if (session('warning'))
        <div class="message-div bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded shadow-md relative transition-opacity duration-300">
            <span class="block sm:inline font-semibold">Warning:</span> {{ session('warning') }}
            <button class="absolute top-0 right-0 mt-1 mr-2 text-yellow-700 hover:text-yellow-900 focus:outline-none closebtnings">
                &times;
            </button>
        </div>
    @endif
    @if (session('error'))
        <div class="message-div bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-md relative transition-opacity duration-300">
            <span class="block sm:inline font-semibold">Error:</span> {{ session('error') }}
            <button class="absolute top-0 right-0 mt-1 mr-2 text-red-700 hover:text-red-900 focus:outline-none closebtnings">
                &times;
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="message-div bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-md relative transition-opacity duration-300">
            <span class="block sm:inline font-semibold">Error:</span> {{ implode(', ', $errors->all()) }}
            <button class="absolute top-0 right-0 mt-1 mr-2 text-red-700 hover:text-red-900 focus:outline-none closebtnings">
                &times;
            </button>
        </div>
    @endif
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Close toast on button click
        var closeButtons = document.querySelectorAll(".closebtnings");
        closeButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                var div = this.closest('.message-div');
                div.classList.add('opacity-0');
                setTimeout(() => div.remove(), 500); // Remove the element after the fade-out animation
            });
        });

        // Auto-hide toasts after 10 seconds
        var messageDivs = document.querySelectorAll(".message-div");
        messageDivs.forEach(function (div) {
            setTimeout(function () {
                div.classList.add('opacity-0');
                setTimeout(() => div.remove(), 500); // Remove the element after the fade-out animation
            }, 10000); // 10 seconds
        });
    });
</script>

