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
    <title>Rules</title>
    {{-- Font --}}
    <link rel="preload" href="https://fonts.googleapis.com">
    <link rel="preload" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Font End --}}
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Hero --}}
    <div class="hero min-h-dvh" style="background-image: url(/images/brajadhenta.png); z-index: 10;" loading="lazy">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-2xl sm:text-4xl font-bold font-montserrat">Rules</h1>
                <p class="mb-5 text-lg font-poppins">
                    Peraturan turnamen yang harus diikuti oleh setiap peserta.
                </p>
            </div>
        </div>
    </div>
    {{-- Hero End --}}

    {{-- Content --}}
    <main class="container mx-auto p-4 font-poppins">
        <!-- PENDAFTARAN -->
        <section id="pendaftaran" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b-2 border-gray-200 pb-2 font-montserrat">I.
                PENDAFTARAN</h2>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Peserta wajib mengisi formulir pendaftaran yang sudah disediakan.</li>
                <li>Setiap pemain wajib melampirkan kartu pelajar saat melakukan pendaftaran.</li>
                <li>Membayar biaya pendaftaran sebesar Rp. 300.000 dalam 1 tim.</li>
            </ul>
        </section>

        <!-- JADWAL PERTANDINGAN -->
        <section id="jadwal" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b-2 border-gray-200 pb-2 font-montserrat">II. JADWAL
                PERTANDINGAN FUTSAL</h2>
            <p class="text-gray-700">Tanggal:</p>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Pendaftaran: 11 Oktober – 30 November 2024</li>
                <li>Technical meeting: 1 Desember 2024</li>
                <li>Pelaksanaan: 7-8 Desember 2024, Tempat: Timsar Futsal Land</li>
            </ul>
        </section>

        <!-- PERATURAN UMUM -->
        <section id="peraturan-umum" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b-2 border-gray-200 pb-2 font-montserrat">III.
                PERATURAN UMUM</h2>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Pelajar SMP/MTS aktif.</li>
                <li>Satu tim terdiri dari 12 pemain, 1 pelatih, dan 2 official.</li>
                <li>Pemain harus berasal dari sekolah yang sama.</li>
                <li>Pemain yang terdaftar yang dapat mengikuti pertandingan.</li>
                <li>Satu tim harus membawa 2 jersey dengan warna yang berbeda (home dan away).</li>
                <li>Tim harus berada di tempat pertandingan 1 jam sebelum pertandingan.</li>
                <li>Pelatih dan official wajib memakai celana panjang dan bersepatu.</li>
            </ul>
        </section>

        <!-- PERATURAN PERTANDINGAN -->
        <section id="peraturan-pertandingan" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b-2 border-gray-200 pb-2 font-montserrat">IV.
                PERATURAN PERTANDINGAN</h2>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Keputusan wasit adalah mutlak.</li>
                <li>Kartu kuning dikenakan denda Rp. 25.000, kartu merah Rp. 50.000.</li>
                <li>Kartu kuning dua kali atau kartu merah membuat pemain absen 1 pertandingan.</li>
                <li>Pemain wajib menggunakan pelindung tulang kering (skinguard).</li>
                <li>Tim harus memberikan uang deposit Rp. 100.000 sebelum pertandingan.</li>
                <li>Pemain tidak boleh memiliki kuku panjang atau memakai aksesoris selama pertandingan.</li>
            </ul>
        </section>

        <!-- PERATURAN SUPPORTER -->
        <section id="peraturan-supporter" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b-2 border-gray-200 pb-2 font-montserrat">V.
                PERATURAN SUPPORTER</h2>
            <!-- Subsections -->
            <h3 class="text-xl font-semibold mt-4 text-gray-800">1) Barang yang Tidak Boleh Dibawa:</h3>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Rokok, korek, atau rokok elektronik.</li>
                <li>Peluit yang mengganggu pertandingan.</li>
                <li>Hewan peliharaan.</li>
                <!-- Other items... -->
            </ul>

            <h3 class="text-xl font-semibold mt-4 text-gray-800">2) Barang yang Boleh Dibawa:</h3>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Tiket pertandingan.</li>
                <li>Identitas supporter.</li>
                <li>Bass drum, snare drum, koreografi.</li>
            </ul>

            <!-- Other subsections... -->
        </section>

        <!-- TEKNIS PERTANDINGAN -->
        <section id="teknis-pertandingan" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b-2 border-gray-200 pb-2 font-montserrat">VI. TEKNIS
                PERTANDINGAN</h2>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Sistem pertandingan adalah knock out stage.</li>
                <li>Durasi pertandingan 2 x 10 menit.</li>
                <li>Setiap tim berhak meminta 1 time out selama 1 menit per babak.</li>
            </ul>
        </section>

        <!-- Download Formulir & Guidebook Section -->
        <section id="downloads" class="mt-10 text-center">
            <h2 class="text-xl font-extrabold mb-6 text-gray-900 tracking-wide font-montserrat">Download
                Guidebook</h2>
            <p class="mb-6 text-lg text-gray-600">Dapatkan informasi lengkap melalui tombol di
                bawah ini.</p>

            <!-- Flexbox Layout for Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <!-- Download Guidebook Button -->
                <button class="btn btn-warning font-poppins font-bold w-full sm:w-auto">
                    <a href="{{ asset('files/Guidebook Brajadhenta Cup.pdf') }}"
                        download="Guidebook Brajadhenta Cup.pdf">
                        Download Guidebook
                    </a>
                </button>
            </div>
        </section>

    </main>


    {{-- Footer --}}
    <x-Footer></x-Footer>
</body>

</html>
