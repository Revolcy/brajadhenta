<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/brajadhentahead.png" type="image/x-icon">
    <meta name="description"
        content="Brajadhenta Cup 2024 adalah kompetisi olahraga terbesar di Solo Raya, menonjolkan sportivitas dan kerja sama antar sekolah. Daftar sekarang!">
    <meta name="keywords"
        content="Brajadhenta Cup, kompetisi olahraga Solo Raya, futsal, basket, olahraga sekolah, Solo Raya sports competition">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <script src="{{ asset('js/home.js') }}" defer></script>
    <title>Contact</title>
    {{-- Font --}}
    <link rel="preload" href="https://fonts.googleapis.com">
    <link rel="preload" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
    rel="stylesheet">
    {{-- Font End --}}
    {{-- FontAwesome Icons for WhatsApp and Email --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Hero --}}
    <div class="hero min-h-dvh" style="background-image: url(/images/brajadhenta.png); z-index: 10;" loadig="lazy">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-2xl sm:text-4xl font-bold font-montserrat">Contact</h1>
                <p class="mb-5 text-lg font-poppins">
                    Untuk informasi lebih lanjut, hubungi kami di WhatsApp atau email.
                </p>
            </div>
        </div>
    </div>
    {{-- Hero End --}}

    {{-- Contact Section --}}
    <div class="container mx-auto py-16 px-4">
        <h2 class="text-4xl font-semibold text-center text-gray-800 mb-12">Contact Us</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- WhatsApp Contact 1 -->
            <div
                class="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 ease-in-out text-center w-full max-w-sm mx-auto">
                <i class="fab fa-whatsapp text-5xl text-green-600 mb-6"></i>
                <h3 class="text-3xl font-semibold text-gray-800">WhatsApp - Affend</h3>
                <p class="text-xl text-gray-600 mt-4">+62 882-3968-4714</p>
                <a href="https://wa.me/6288239684714" target="_blank"
                    class="mt-6 inline-block bg-gradient-to-r from-[#000000] to-[#444444] text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                    Chat on WhatsApp
                </a>
            </div>
            <!-- Email Contact -->
            <div
                class="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 ease-in-out text-center w-full max-w-sm mx-auto">
                <i class="fas fa-envelope text-5xl text-blue-600 mb-6"></i>
                <h3 class="text-3xl font-semibold text-gray-800">Email Us</h3>
                <p class="text-xl text-gray-600 mt-4">krastasmanta1983@gmail.com</p>
                <a href="mailto:krastasmanta1983@gmail.com" target="_blank"
                    class="mt-6 inline-block bg-gradient-to-r from-[#000000] to-[#444444] text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                    Send Email
                </a>
            </div>
            <!-- WhatsApp Contact 2 -->
            <div
                class="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 ease-in-out text-center w-full max-w-sm mx-auto">
                <i class="fab fa-whatsapp text-5xl text-green-600 mb-6"></i>
                <h3 class="text-3xl font-semibold text-gray-800">WhatsApp - Selfi</h3>
                <p class="text-xl text-gray-600 mt-4">+62 858-4212-2137</p>
                <a href="https://wa.me/6285842122137" target="_blank"
                    class="mt-6 inline-block bg-gradient-to-r from-[#000000] to-[#444444] text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>


    {{-- Contact Section End --}}

    {{-- Footer --}}
    <x-Footer></x-Footer>
</body>

</html>
