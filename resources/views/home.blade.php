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
    <title>Brajadhenta Cup 2024 | Kompetisi Olahraga Solo Raya</title>
    {{-- Font --}}
    <link rel="preload" href="https://fonts.googleapis.com">
    <link rel="preload" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Font End --}}
    <link rel="stylesheet" href="{{ asset('/build/assets/app-CyuejeMz.css') }}">
    <script src="{{ asset('/build/assets/app-z-Rg4TxU.js') }}"></script>
</head>

<body>
    {{-- Navbar --}}
    <x-Navbar></x-Navbar>
    {{-- Navbar End --}}

    <!-- Hero Start -->
    <div class="hero min-h-dvh" loading="lazy" style="background-image: url(/images/fifafutsal.jpg); z-index: 10;">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-2xl sm:text-4xl font-bold font-montserrat">BRAJADHENTA CUP</h1>
                <p class="mb-5 text-lg font-semibold font-poppins">
                    Ayo tunjukkan kemampuan terbaikmu!
                </p>
                <button class="btn btn-warning font-montserrat font-bold px-4 py-2">
                    <a href="https://forms.gle/5mHgBn85Q4CAdb2HA" target="_blank">Daftar Sekarang</a>
                </button>
                <p class="text-sm font-poppins font-semibold mt-2">
                    No Rekening:
                    <span id="accountNumber" class="text-mono cursor-pointer text-blue-500 underline"
                        onclick="copyAccountNumber()">359301010109507</span>
                    <span class="text-mono text-blue-500 underline">(Selfitri BRI)</span>
                </p>
            </div>
        </div>
    </div>

    {{-- Hero End --}}

    {{-- Timer  --}}
    <div class="grid auto-cols-max grid-flow-col gap-5 text-center justify-center items-center h-[25dvh]">
        <div class="flex flex-col items-center">
            <span class="countdown font-mono text-5xl">
                <span id="days" style="--value:00;"></span>
            </span>
            days
        </div>
        <div class="flex flex-col items-center">
            <span class="countdown font-mono text-5xl">
                <span id="hours" style="--value:00;"></span>
            </span>
            hours
        </div>
        <div class="flex flex-col items-center">
            <span class="countdown font-mono text-5xl">
                <span id="minutes" style="--value:00;"></span>
            </span>
            min
        </div>
        <div class="flex flex-col items-center">
            <span class="countdown font-mono text-5xl">
                <span id="seconds" style="--value:00;"></span>
            </span>
            sec
        </div>
    </div>
    {{-- Timer End --}}

    {{-- Content --}}
    <div class="relative isolate overflow-hidden bg-white px-6 py-20 sm:py-24 lg:px-0">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2 lg:items-center lg:gap-x-10">
            <!-- Left Section: Heading and Intro Text -->
            <div class="lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:px-8">
                <div class="lg:max-w-lg">
                    <h1 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">
                        Brajadhenta Cup</h1>
                    <p class="mt-6 text-5l leading-8 text-gray-700 lg:text-xl">
                        Brajadhenta Cup adalah ajang kompetisi futsal yang diselenggarakan oleh OSIS & MPK SMA Negeri
                        1 Tawangsari dalam rangka memperingati Dies Natalis ke 41.<br>
                        Tidak hanya menonjolkan keterampilan bermain
                        bola, tetapi juga menumbuhkan semangat sportivitas dan kerja sama tim.<br>
                        Acara ini mengundang
                        partisipasi dari berbagai sekolah di Solo Raya, memberikan kesempatan kepada siswa untuk
                        berkompetisi di lapangan futsal melawan tim-tim dari luar sekolah, serta memperluas jaringan
                        sosial mereka.
                    </p>
                </div>
            </div>

            <!-- Right Section: Image -->
            <div class="lg:col-start-2 lg:col-span-1 lg:row-start-1">
                <img class="w-full max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 lg:max-w-full"
                    src="/images/brajadhenta.png" alt="Brajadhenta Cup Image" loading="lazy">
            </div>

            <!-- Bottom Section: Features List and Details -->
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:w-full lg:px-8 text-lg">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-3xl">
                    <ul role="list" class="space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900">Kompetisi Berkualitas.</strong> <br>
                                Acara ini dirancang untuk memberikan tantangan terbaik kepada para peserta dengan
                                standar
                                yang tinggi.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900">Semangat Sportivitas.</strong> <br>
                                Peserta diharapkan untuk menjunjung tinggi nilai-nilai sportivitas dan menghargai setiap
                                lawan yang mereka hadapi.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900">Membangun Jaringan Sosial.</strong><br>
                                Selain berkompetisi, peserta memiliki kesempatan untuk membangun hubungan dengan
                                sekolah-sekolah lain di Solo Raya.</span>
                        </li>
                    </ul>
                    <p class="mt-8">
                        Dengan mengutamakan semangat persaingan sehat, Brajadhenta Cup bertujuan untuk membentuk
                        karakter
                        siswa menjadi lebih disiplin, tangguh, dan bertanggung jawab.
                    </p>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Kenapa Ikut Brajadhenta Cup?</h2>
                    <p class="mt-6 lg:text-lg">
                        Brajadhenta Cup tidak hanya sebagai ajang kompetisi olahraga, tetapi juga merupakan kesempatan
                        besar
                        untuk mengasah keterampilan sosial dan membangun semangat tim. Peserta akan mendapatkan
                        pengalaman
                        berharga dalam berkompetisi, menjalin persahabatan, dan membangun jaringan dengan siswa dari
                        berbagai
                        sekolah di Solo Raya.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Content End --}}

    {{-- Footer --}}
    <x-Footer></x-Footer>
    {{-- Footer End --}}
</body>

</html>
