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
        <style>
            .swiper-pagination {
                display: flex !important;
                justify-content: center;
                align-items: center;
                flex-direction: row !important;
                gap: 0.5rem;
                position: absolute !important;
                bottom: 1rem;
                left: 50%;
                transform: translateX(-50%);
                width: auto;
                height: auto;
                z-index: 10;
            }

            .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background-color: rgba(255, 255, 255, 0.5);
                opacity: 1;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .swiper-pagination-bullet-active {
                background-color: #3b82f6;
                /* Tailwind blue-500 */
            }
        </style>
    </head>

    <body class="font-sans">
        <div class="min-h-screen bg-[#B8BDCA]  md:pt-[100px]">
            <header class="relative bg-white">
                <x-navbar />
            </header>
            <!-- Slider main container -->
            <div>

            </div>
            <div class="hero-swiper swiper h-screen relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
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
                            <div class=" md:max-w-md pt-16 pb-10 space-y-2 md:space-y-4">
                                <h1 class="font-[Calligraffitti] text-[8rem]">Mission</h1>
                                <div class="w-[95%] ">
                                    <div
                                         class="bg-[#192A5599] flex justify-between items-center px-8 py-2 rounded-[20px]">
                                        <img class="block w-[40px]" src="{{ asset('/assets/images/check.svg') }}"
                                             alt="Check mark">
                                        <p class="w-[70%] text-white">Provide world-class surgical and medical care.</p>
                                    </div>
                                </div>
                                <div class="w-[95%]">
                                    <div
                                         class="bg-[#192A5599] flex justify-between items-center px-8 py-2 rounded-[20px]">
                                        <img class="block w-[40px]" src="{{ asset('/assets/images/check.svg') }}"
                                             alt="Check mark">
                                        <p class="w-[70%] text-white">Tain healthcare professionals through innovation,
                                            research, and excellence.</p>
                                    </div>
                                </div>
                                <div class="w-[95%]">
                                    <div
                                         class="bg-[#192A5599] flex justify-between items-center px-8 py-2 rounded-[20px]">
                                        <img class="block w-[40px]" src="{{ asset('/assets/images/check.svg') }}"
                                             alt="Check mark">
                                        <p class="w-[70%] text-white">Use modern, sustainable, and advanced technology.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute right-0 -top-[40px]">
                                <img class="h-[790px] w-[800px]"
                                     src="{{ asset('/assets/images/doctors_discussion_table.svg') }}"
                                     alt="Doctors having a group Hi-five">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-swiper swiper-pagination "></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                {{-- <div class="swiper-scrollbar"></div> --}}
            </div>
        </div>
        <main>
            {{-- What will build --}}
            <section class="min-h-screen bg-linear-to-b from-[#1A2D98E5] to-[#142244] pt-30 pb-10">
                <div class="space-y-25">
                    <h1 class="font-[Calligraffitti] text-6xl text-white text-center">What we will be building</h1>
                    <div class="md:max-w-[1000px] grid md:grid-cols-3 mx-auto gap-15">
                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-heart.svg)] min-h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
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
                             class="border border-white/10 bg-[url(/public/assets/images/bg-six-nine.svg)] min-h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/six-nine-icon.svg') }}"
                                     alt="Six Nine">
                                <span class="text-lg font-bold text-black/70">Cancer & <br />Radiotherapy Centre</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-doctors-surgery.svg)] min-h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
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
                             class="border border-white/10 bg-[url(/public/assets/images/bg-ambulance-light.svg)] min-h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]"
                                     src="{{ asset('assets/images/medical-icon_emergency.svg') }}" alt="Heart">
                                <span class="text-lg font-bold text-black/70">Emergency & Trauma<br /> Centre</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-women-child.svg)] min-h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/woman-child.svg') }}"
                                     alt="Woman and child">
                                <span class="text-lg font-bold text-black/70">Women & Children’s<br /> Hospital</span>
                            </div>

                        </div>

                        <div
                             class="border border-white/10 bg-[url(/public/assets/images/bg-teaching.svg)] min-h-[30vh] bg-no-repeat  bg-contain bg-center bg-[#f3f3f3] rounded-[20px] p-6">
                            <img class="block ml-auto w-[20px]" src="{{ asset('assets/images/arrow-icon.svg') }}"
                                 alt="Arrow pointer">
                            <div class="space-y-6">
                                <img class="block w-[50px]" src="{{ asset('assets/images/teacher-board-icon.svg') }}"
                                     alt="Heart">
                                <span class="text-lg font-bold text-black/70">Research & Training</span>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="md:max-w-[900px] mx-auto">
                        <!-- gallery-swiper.blade.php -->
                        <div class="relative w-full max-w-6xl mx-auto py-12">
                            <div class="swiper gallery-swiper">
                                <div class="swiper-wrapper">
                                    <!-- IMPORTANT: give each slide a fixed width so 'auto' works -->
                                    <div
                                         class="swiper-slide w-[300px] md:w-[360px] lg:w-[420px] rounded-2xl overflow-hidden shadow-lg bg-white">
                                        <img class="w-full h-64 object-cover"
                                             src="{{ asset('assets/images/plexus_trauma.jpg') }}" alt="Trauma">
                                        <div class="p-4">
                                            <h4 class="text-lg font-semibold">Trauma Centre</h4>
                                        </div>
                                    </div>

                                    <div
                                         class="swiper-slide w-[300px] md:w-[360px] lg:w-[420px] rounded-2xl overflow-hidden shadow-lg bg-white">
                                        <img class="w-full h-64 object-cover"
                                             src="{{ asset('assets/images/plexus_cancer.jpg') }}" alt="Cardiology">
                                        <div class="p-4">
                                            <h4 class="text-lg font-semibold">Cardiology</h4>
                                        </div>
                                    </div>

                                    <div
                                         class="swiper-slide w-[300px] md:w-[360px] lg:w-[420px] rounded-2xl overflow-hidden shadow-lg bg-white">
                                        <img class="w-full h-64 object-cover"
                                             src="{{ asset('assets/images/plexus_imaging.jpg') }}" alt="Imaging">
                                        <div class="p-4">
                                            <h4 class="text-lg font-semibold">Advanced Imaging</h4>
                                        </div>
                                    </div>

                                    <!-- add more slides as needed -->
                                </div>

                                <!-- navigation inside same container (scoped selectors used in JS) -->
                                <div class="swiper-button-prev text-white"></div>
                                <div class="swiper-button-next text-white"></div>

                                <!-- optional centered pagination wrapper (if you want pagination) -->
                                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 pointer-events-none">
                                    <div class="swiper-pagination pointer-events-auto"></div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </section>

            {{-- why the hospital matters --}}
            <section class="min-h-screen">
                <div class="md:max-w-[1150px] mx-auto pt-25">
                    <div class="space-y-8 md:max-w-[1024px] mx-auto">
                        <h1 class="font-[Calligraffitti] text-6xl text-center">Why this hospital matters?</h1>
                        <p class="leading-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div
                         class="md:bg-[url(/public/assets/images/female_doctor.svg)] min-h-[90vh] bg-contain bg-no-repeat bg-center grid md:grid-cols-2 md:pt-30 w-full md:pl-20 gap-y-16">
                        <div class="space-y-4">
                            <div class="flex space-x-4 items-center">
                                <div
                                     class="w-[50px] h-[50px] rounded-[50%] bg-[#ADD8E6] flex items-center justify-center">
                                    <img class="w-[30px]" src="{{ asset('/assets/images/circled_check.svg') }}"
                                         alt="check in a circle">
                                </div>
                                <h3 class="text-lg font-bold max-w-[300px]">Raises the standard of healthcare in West
                                    Africa</h3>
                            </div>
                            <p class="w-[400px] leading-6">Introducing world-class medical infrastructure, advanced
                                technologies, and clinical
                                expertise that redefine what is possible in regional healthcare delivery.</p>
                        </div>

                        <div class="space-y-4 ml-auto">
                            <div class="flex space-x-4 items-center">
                                <div
                                     class="w-[50px] h-[50px] rounded-[50%] bg-[#ADD8E6] flex items-center justify-center">
                                    <img class="w-[30px]" src="{{ asset('/assets/images/Cancel Travel 1.svg') }}"
                                         alt="check in a circle">
                                </div>
                                <h3 class="text-lg font-bold max-w-[300px]">Reduces the need for patients to travel
                                    abroad for treatment</h3>
                            </div>
                            <p class="w-[400px] leading-6 pl-4">by providing the same level of specialized care and
                                medical excellence locally, ensuring families can access lifesaving procedures without
                                the financial and emotional strain of overseas travel.</p>
                        </div>

                        <div class="space-y-4">
                            <div class="flex space-x-4 items-center">
                                <div
                                     class="w-[50px] h-[50px] rounded-[50%] bg-[#ADD8E6] flex items-center justify-center">
                                    <img class="w-[30px]" src="{{ asset('/assets/images/masked_man.svg') }}"
                                         alt="check in a circle">
                                </div>
                                <h3 class="text-lg font-bold max-w-[300px]">Delivers highly specialized and complex
                                    medical services</h3>
                            </div>
                            <p class="w-[400px] leading-6">Including robotic-assisted surgeries, organ transplants, and
                                advanced cancer care, supported by multidisciplinary teams and cutting-edge research.
                            </p>
                        </div>

                        <div class="space-y-4 ml-auto">
                            <div class="flex space-x-4 items-center">
                                <div
                                     class="w-[50px] h-[50px] rounded-[50%] bg-[#ADD8E6] flex items-center justify-center">
                                    <img class="w-[30px]"
                                         src="{{ asset('/assets/images/fluent-mdl2_party-leader.svg') }}"
                                         alt="check in a circle">
                                </div>
                                <h3 class="text-lg font-bold max-w-[300px]">Positions Ghana as a premier healthcare hub
                                </h3>
                            </div>
                            <p class="w-[400px] leading-6 pl-4">in Africa by attracting international patients,
                                top-tier medical professionals, and global research partnerships that drive innovation
                                and strengthen the country’s reputation in medicine and science.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="min-h-[60vh] bg-[#223CCB] py-20">
                <div class="md:max-w-[1100px] mx-auto md:grid grid-cols-5 space-y-10">
                    <div class="text-white flex flex-col justify-start items-center space-y-2 md:space-y-4">
                        <img class="" src="{{ asset('/assets/images/vaadin_doctor.svg') }}"
                             alt="Vaadin Doctor">
                        <div class="">
                            <p class="text-4xl font-extrabold text-center">1000+</p>
                            <hr class="w-[70px] h-[5px] border-none bg-white mx-auto mt-2">
                        </div>
                        <p class="max-w-[130px] text-center">Profesional
                            Doctors</p>
                    </div>

                    <div class="text-white flex flex-col justify-start items-center space-y-2 md:space-y-4">
                        <img class="" src="{{ asset('/assets/images/wpf_medical-doctor.svg') }}"
                             alt="Medical Doctor">
                        <div class="">
                            <p class="text-4xl font-extrabold text-center">1500+</p>
                            <hr class="w-[70px] h-[5px] border-none bg-white mx-auto mt-2">
                        </div>
                        <p class="max-w-[130px] text-center">Profesional
                            Nurses</p>
                    </div>

                    <div class="text-white flex flex-col justify-start items-center space-y-2 md:space-y-4">
                        <img class="" src="{{ asset('/assets/images/solar_hospital-bold-duotone.svg') }}"
                             alt="Medical Doctor">
                        <div class="">
                            <p class="text-4xl font-extrabold text-center">5</p>
                            <hr class="w-[70px] h-[5px] border-none bg-white mx-auto mt-2">
                        </div>
                        <p class="max-w-[130px] text-center">Modern
                            Facilities</p>
                    </div>

                    <div class="text-white flex flex-col justify-start items-center space-y-2 md:space-y-4">
                        <img class="" src="{{ asset('/assets/images/icon-park_hospital-bed.svg') }}"
                             alt="Medical Doctor">
                        <div class="">
                            <p class="text-4xl font-extrabold text-center">1000+</p>
                            <hr class="w-[70px] h-[5px] border-none bg-white mx-auto mt-2">
                        </div>
                        <p class="max-w-[130px] text-center">Quality
                            Beds</p>
                    </div>

                    <div class="text-white flex flex-col justify-start items-center space-y-2 md:space-y-4">
                        <img class="" src="{{ asset('/assets/images/medical-icon_i-ambulance.svg') }}"
                             alt="Medical Doctor">
                        <div class="">
                            <p class="text-4xl font-extrabold text-center">1000+</p>
                            <hr class="w-[70px] h-[5px] border-none bg-white mx-auto mt-2">
                        </div>
                        <p class="max-w-[130px] text-center">Modern
                            Ambulances</p>
                    </div>
                </div>
            </section>

            <section class="md:max-w-[1100px] min-h-screen py-16 mx-auto">
                <div class="min-h-[60vh] border">
                    <div class="flex justify-between">
                        <div class="py-10 px-15 space-y-10">
                            <h1 class="text-3xl font-bold max-w-[300px] text-center">
                                Frequently Asked
                                Questions</h1>
                            <div class="flex flex-col items-center space-y-6">
                                <div class="flex space-x-6 border-b pb-2 border-dashed">
                                    <img src="{{ asset('/assets/images/ion_call.svg') }}" alt="Phone">
                                    <div class="space-y-2 w-[200px]">
                                        <p class="font-bold text-black/80 text-sm ">Contact</p>
                                        <p class="text-xs">+233 505 687 516</p>
                                    </div>
                                </div>

                                <div class="flex space-x-6 border-b pb-2 border-dashed">
                                    <img src="{{ asset('/assets/images/entypo_location.svg') }}" alt="Phone">
                                    <div class="space-y-2 w-[200px]">
                                        <p class="font-bold text-black/80 text-sm">Address</p>
                                        <p class="text-xs">Ghana, Accra</p>
                                    </div>
                                </div>

                                <div class="flex space-x-6 border-b pb-2 border-dashed">
                                    <img src="{{ asset('/assets/images/mdi_shop-time.svg') }}" alt="Phone">
                                    <div class="space-y-2 w-[200px]">
                                        <p class="font-bold text-black/80 text-sm">Working Hoours</p>
                                        <p class="text-xs">Monday-Sunday (00:00 AM to 00:00 AM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-[50%]  space-y-4 py-10 pr-15" id="accordion">
                            <div class="border-b border-dashed pb-5">
                                <p
                                   class="accordion-header w-full flex justify-between px-4 py-2font-semibold">
                                    Question 1
                                    <img src="{{ asset('assets/images/iconamoon_arrow-up-2-thin.svg') }}"
                                         alt="Arrow Up">
                                </p>
                                <div class="accordion-content hidden p-4 border-t">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eos voluptatibus
                                    nobis, libero numquam ipsam repellendus, quod neque commodi officiis non hic
                                    voluptatum illo et reiciendis facere iste sapiente amet.
                                </div>
                            </div>

                            <div class="border-b border-dashed pb-5">
                                <p
                                   class="accordion-header w-full flex justify-between px-4 py-2font-semibold">
                                    Question 2
                                    <img src="{{ asset('assets/images/iconamoon_arrow-up-2-thin.svg') }}"
                                         alt="Arrow Up">
                                </p>
                                <div class="accordion-content hidden p-4 border-t">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eos voluptatibus
                                    nobis, libero numquam ipsam repellendus, quod neque commodi officiis non hic
                                    voluptatum illo et reiciendis facere iste sapiente amet.
                                </div>
                            </div>

                            <div class="border-b border-dashed pb-5">
                                <p
                                   class="accordion-header w-full flex justify-between px-4 py-2font-semibold">
                                    Question 3
                                    <img src="{{ asset('assets/images/iconamoon_arrow-up-2-thin.svg') }}"
                                         alt="Arrow Up">
                                </p>
                                <div class="accordion-content hidden p-4 border-t">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eos voluptatibus
                                    nobis, libero numquam ipsam repellendus, quod neque commodi officiis non hic
                                    voluptatum illo et reiciendis facere iste sapiente amet.
                                </div>
                            </div>

                            <div class="border-b border-dashed pb-5">
                                <p
                                   class="accordion-header w-full flex justify-between px-4 py-2font-semibold">
                                    Question 4
                                    <img src="{{ asset('assets/images/iconamoon_arrow-up-2-thin.svg') }}"
                                         alt="Arrow Up">
                                </p>
                                <div class="accordion-content hidden p-4 border-t">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eos voluptatibus
                                    nobis, libero numquam ipsam repellendus, quod neque commodi officiis non hic
                                    voluptatum illo et reiciendis facere iste sapiente amet.
                                </div>
                            </div>

                            <div class="border-b border-dashed pb-5">
                                <p
                                   class="accordion-header w-full flex justify-between px-4 py-2font-semibold">
                                    Question 5
                                    <img src="{{ asset('assets/images/iconamoon_arrow-up-2-thin.svg') }}"
                                         alt="Arrow Up">
                                </p>
                                <div class="accordion-content hidden p-4 border-t">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eos voluptatibus
                                    nobis, libero numquam ipsam repellendus, quod neque commodi officiis non hic
                                    voluptatum illo et reiciendis facere iste sapiente amet.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <script>
            const headers = document.querySelectorAll(".accordion-header");

            headers.forEach((header) => {
                header.addEventListener("click", () => {
                    const openItem = document.querySelector(".accordion-content:not(.hidden)");
                    const currentContent = header.nextElementSibling;

                    if (openItem && openItem !== currentContent) {
                        openItem.classList.add("hidden");
                        openItem.previousElementSibling.querySelector("span").textContent = "+";
                    }

                    currentContent.classList.toggle("hidden");
                    const sign = header.querySelector("span");
                    sign.textContent = currentContent.classList.contains("hidden") ? "+" : "−";
                });
            });
        </script>
    </body>

</html>
