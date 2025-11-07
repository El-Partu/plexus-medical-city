<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">

        {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

    <body class="font-sans">
        <div class="min-h-screen bg-[#B8BDCA]  md:pt-[100px]">
            <header class="relative bg-white p">
                <x-navbar />
            </header>
            <!-- Slider main container -->
            <div>

            </div>
            <div class="swiper h-screen">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper relative">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="flex md:max-w-[1024px] mx-auto items-center h-[80vh]">
                            <div class=" md:max-w-md pt-16">
                                <h1 class="font-[Calligraffitti] text-[8rem]">Vision</h1>
                                <p class="leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Temporibus, debitis
                                    dignissimos
                                    dolor labore earum maiores esse reprehenderit explicabo facere? Quod aliquam
                                    corporis
                                    fuga vel eligendi vero tenetur sequi est quibusdam.Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Temporibus, debitis
                                    dignissimos
                                    dolor labore earum maiores esse reprehenderit explicabo facere? Quod aliquam
                                    corporis
                                    fuga vel eligendi vero tenetur sequi est quibusdam.</p>
                            </div>
                            <div class="absolute right-0 -top-[50px]">
                                <img class="h-[800px] w-[800px]" src="{{ asset('/assets/images/doctors_hifive.svg') }}"
                                     alt="Doctors having a group Hi-five">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex md:max-w-[1024px] mx-auto items-center h-[80vh]">
                            <div class=" md:max-w-md pt-16 space-y-4">
                                <h1 class="font-[Calligraffitti] text-[8rem]">Mission</h1>
                                <div class="w-[95%] ">
                                    <div
                                         class="bg-[#192A5599] flex justify-between items-center px-8 py-4 rounded-[20px]">
                                        <img class="block w-[40px]" src="{{ asset('/assets/images/check.svg') }}"
                                             alt="Check mark">
                                        <p class="w-[70%] text-white">Provide world-class surgical and medical care.</p>
                                    </div>
                                </div>
                                <div class="w-[95%]">
                                    <div
                                         class="bg-[#192A5599] flex justify-between items-center px-8 py-4 rounded-[20px]">
                                        <img class="block w-[40px]" src="{{ asset('/assets/images/check.svg') }}"
                                             alt="Check mark">
                                        <p class="w-[70%] text-white">Tain healthcare professionals through innovation,
                                            research, and excellence.</p>
                                    </div>
                                </div>
                                <div class="w-[95%]">
                                    <div
                                         class="bg-[#192A5599] flex justify-between items-center px-8 py-4 rounded-[20px]">
                                        <img class="block w-[40px]" src="{{ asset('/assets/images/check.svg') }}"
                                             alt="Check mark">
                                        <p class="w-[70%] text-white">Use modern, sustainable, and advanced technology.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute right-0 -top-[40px]">
                                <img class="h-[800px] w-[800px]"
                                     src="{{ asset('/assets/images/doctors_discussion_table.svg') }}"
                                     alt="Doctors having a group Hi-five">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class=" ">
                    <div class="swiper-pagination "></div>
                </div>
                <div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <!-- If we need scrollbar -->
                {{-- <div class="swiper-scrollbar"></div> --}}
            </div>
        </div>
        <main>
            {{-- What will build --}}
            <section class="min-h-screen bg-linear-to-b from-[#1A2D98E5] to-[#142244] pt-30 pb-10">
                <div class="space-y-25">
                    <h1 class="font-[Calligraffitti] text-6xl text-white text-center">What we will be building</h1>
                    <div class="md:max-w-[900px] grid md:grid-cols-3 mx-auto gap-15">
                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-heart.svg)] h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/heart-icon.svg') }}"
                                     alt="Heart">
                                <span class="text-lg font-bold text-black/70">Cardiology & <br /> Cardiothoracic
                                    Centre</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-six-nine.svg)] h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/six-nine-icon.svg') }}"
                                     alt="Six Nine">
                                <span class="text-lg font-bold text-black/70">Cancer & <br />Radiotherapy Centre</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-doctors-surgery.svg)] h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/surgery-icon.svg') }}"
                                     alt="Doctor doing a surgery">
                                <span class="text-lg font-bold text-black/70">Advanced Surgery &<br /> Operating
                                    Centre</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-ambulance-light.svg)] h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]"
                                     src="{{ asset('assets/images/medical-icon_emergency.svg') }}" alt="Heart">
                                <span class="text-lg font-bold text-black/70">Emergency & Trauma<br /> Centre</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-women-child.svg)] h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/woman-child.svg') }}"
                                     alt="Woman and child">
                                <span class="text-lg font-bold text-black/70">Women & Children’s<br /> Hospital</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-teaching.svg)] h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/teacher-board-icon.svg') }}"
                                     alt="Heart">
                                <span class="text-lg font-bold text-black/70">Research & Training</span>
                            </div>

                        </div>
                    </div>

                    <div class="md:max-w-[900px] mx-auto">
                        <!-- Slider container -->
                        <div class="swiper mySwiper w-full px-10">
                            <!-- Wrapper -->
                            <div class="swiper-wrapper">
                                <div
                                     class="swiper-slide bg-blue-500 text-white flex items-center justify-center rounded-xl text-3xl font-semibold">
                                    Slide 1</div>
                                <div
                                     class="swiper-slide bg-green-500 text-white flex items-center justify-center rounded-xl text-3xl font-semibold">
                                    Slide 2</div>
                                <div
                                     class="swiper-slide bg-purple-500 text-white flex items-center justify-center rounded-xl text-3xl font-semibold">
                                    Slide 3</div>
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination mt-6"></div>

                            <!-- Navigation buttons -->
                            <div class="swiper-button-prev text-white"></div>
                            <div class="swiper-button-next text-white"></div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </body>

</html>
