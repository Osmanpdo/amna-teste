<header>
    <nav class="bg-black text-white flex justify-between p-6 border-b border-gray-300">
        <div>
            <a href="{{ route('welcome') }}">Logo</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>  
        <div class="relative">
            <button
                id="profile-button"
                type="button"
                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
            >
                Perfil
                <svg class="-me-0.5 ms-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>

            <!-- Dropdown -->
            <div
                id="profile-dropdown"
                class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg z-50"
            >
                <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Meu Perfil</a>
                <form method="POST" action="{{ route('profile') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                        Sair
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const profileButton = document.getElementById("profile-button");
        const dropdown = document.getElementById("profile-dropdown");

        profileButton.addEventListener("click", function (event) {
            dropdown.classList.toggle("hidden");
            event.stopPropagation();
        });

        document.addEventListener("click", function (event) {
            if (!dropdown.contains(event.target) && !profileButton.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    });
</script>
