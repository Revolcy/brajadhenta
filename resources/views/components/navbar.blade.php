{{-- Navbar --}}
<div class="navbar bg-base-100">
    <!-- Avatar and Logo -->
    <div class="avatar transition-transform duration-300 ease-in-out hover:scale-105">
        <div class="w-12">
            <img src="/images/brajadhentahead.png" />
        </div>
    </div>
    <div class="flex-1">
        <a class="btn btn-ghost text-xl font-montserrat" href="{{ url('/') }}">BRAJADHENTA</a>
    </div>

    <!-- Hamburger Menu Button for Small Screens -->
    <div class="block lg:hidden">
        <button id="hamburger" class="btn btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block h-5 w-5 stroke-current transition-transform duration-300 ease-in-out hover:rotate-90">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Navbar Menu for Larger Screens -->
    <div class="flex-none hidden lg:block">
        <ul class="menu menu-horizontal px-1 font-poppins">
            <li><a href="https://maps.app.goo.gl/TMnzzfJ83nbbzsyAA" target="_blank">Maps</a>
            </li>
            <li><a href="{{ url('/rules') }}">Rules</a></li>
            <li><a href="{{ asset('files/Rundown Brajadhenta Cup.pdf') }}"
                    download="Rundown Brajadhenta Cup.pdf">Rundown</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
    </div>
</div>

<!-- Sidebar for Small Screens -->
<div id="mobile-menu"
    class="fixed top-0 left-0 h-full w-64 bg-base-100 lg:hidden transition-transform transform -translate-x-full z-50 duration-300 ease-in-out hidden">
    <ul class="menu bg-base-100 p-4 font-poppins">
        <li><a href="https://maps.app.goo.gl/TMnzzfJ83nbbzsyAA" target="_blank">Maps</a></li>
        <li><a href="{{ url('/rules') }}">Rules</a></li>
        <li><a href="{{ asset('files/Rundown Brajadhenta Cup.pdf') }}"
                download="Rundown Brajadhenta Cup.pdf">Rundown</a></li>
        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
    </ul>
</div>

<!-- Overlay -->
<div id="overlay"
    class="fixed inset-0 bg-black opacity-50 hidden lg:hidden z-40 transition-opacity duration-300 ease-in-out">
</div>
