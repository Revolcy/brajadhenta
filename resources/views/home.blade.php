<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/brajadhentahead.png" type="image/x-icon">
    <script src="{{ asset('js/home.js') }}" defer></script>
    <title>BRAJADHENTA CUP</title>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Font End --}}
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Navbar --}}
    <x-Navbar></x-Navbar>
    {{-- Navbar End --}}

    <!-- Hero Start -->
    <div class="hero min-h-dvh" style="background-image: url(/images/fifafutsal.jpg); z-index: 10;">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold font-montserrat">BRAJADHENTA CUP</h1>
                <p class="mb-5 text-2l font-poppins">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-warning font-montserrat font-bold ">Daftar Sekarang</button>
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
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better workflow
                        </h1>
                        <p class="mt-6 text-xl leading-8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper
                            neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae
                            feugiat egestas.</p>
                    </div>
                </div>
            </div>
            <div
                class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                    src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png"
                    alt="">
            </div>
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper
                            sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra
                            tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed
                            eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                        <ul role="list" class="mt-8 space-y-8 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900">Push to deploy.</strong> Lorem ipsum,
                                    dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit
                                    eaque, iste dolor cupiditate blanditiis ratione.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900">SSL certificates.</strong> Anim aute
                                    id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                                    commodo.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path
                                        d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                    <path fill-rule="evenodd"
                                        d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900">Database backups.</strong> Ac
                                    tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi
                                    lobortis.</span>
                            </li>
                        </ul>
                        <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et.
                            Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel.
                            Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et
                            ut. Ac lorem vel integer orci.</p>
                        <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No server? No problem.</h2>
                        <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in.
                            Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat
                            vulputate nibh. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim
                            cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis
                            diam.</p>
                    </div>
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
