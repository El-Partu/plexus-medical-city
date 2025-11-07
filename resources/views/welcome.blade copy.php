<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

    <body class="font-sans">
        <div
             class="min-h-[200vh] bg-[linear-gradient(to_bottom,_#0f0f2f_30%,_#3a3ac6_70%,_#d03f3f_80%,_#070716_100%)] relative md:pb-40">
            {{-- <div class="absolute h-full bg-transparent w-full blur-xl bg-[linear-gradient(to_top,_#070716_30%,_#0f0f2f_30%,_#3a3ac6_60%,_#d03f3f_80%,)] "> --}}
            <header class="pt-8 px-10 mb-34">
                <nav class="fixed top-0 left-0 w-full z-50 bg-[#0f0f2f] text-white shadow-[0_2px_4px_rgba(0,0,0,0.2)] transition-colors duration-700 z-10 pt-4"
                     id="navbar">
                    <div class="max-w-7xl mx-auto flex items-center justify-between px-6">
                        <!-- Logo -->
                        <div class="flex items-center space-x-2">
                            <img class="h-8 w-8" src="" alt="Plexus Logo">
                            <span class="font-semibold text-lg">Plexus Medical City</span>
                        </div>

                        <!-- Hamburger -->
                        <button class="md:hidden focus:outline-none" id="menu-toggle">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <!-- Desktop Nav -->
                        <div class="hidden md:flex items-center space-x-16 relative " id="desktop-links">
                            <a class="block border-b-2 border-transparent hover:border-white py-4 transition-all"
                               href="/">Home</a>
                            <!-- About Dropdown -->
                            <div class="group ">
                                <button
                                        class="border-b-2 border-transparent hover:border-white transition-all py-4">About
                                    Us</button>
                                <div
                                     class="hidden group-hover:block absolute left-0  bg-white shadow-lg rounded-lg w-72 p-3 space-y-2 text-sm">
                                    <a class="block hover:underline" href="#">About us</a>
                                    <a class="block hover:underline" href="#">History</a>
                                    <a class="block hover:underline" href="#">Strategic Plan & Roadmap</a>
                                    <a class="block hover:underline" href="#">Implementation & Operations</a>
                                    <a class="block hover:underline" href="#">Global Partnership & Tourism</a>
                                    <a class="block hover:underline" href="#">Budget Summary</a>
                                    <a class="block hover:underline" href="#">Financial Sustainability</a>
                                </div>
                            </div>

                            <!-- Contact Dropdown -->
                            <div class="relative group">
                                <button
                                        class="border-b-2 border-transparent hover:border-white transition-all py-4">Contact
                                    Us</button>
                                <div
                                     class="hidden group-hover:block absolute left-0 mt-2 bg-[#0f0f2f] shadow-lg rounded-lg w-48 p-3 space-y-2 text-sm">
                                    <a class="block hover:underline" href="#">Contact Us</a>
                                    <a class="block hover:underline" href="#">FAQ’s</a>
                                </div>
                            </div>

                            <a class="border-b-2 border-transparent hover:border-white transition-all py-4"
                               href="#">Donate</a>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="hidden md:hidden bg-[#0f0f2f] px-6 py-4 space-y-3" id="mobile-menu">
                        <a class="block hover:underline" href="#">Home</a>

                        <!-- About Us -->
                        <div>
                            <button class="w-full text-left hover:underline" data-toggle="about">About Us</button>
                            <div class="hidden ml-4 mt-2 space-y-2 text-sm" id="about-submenu">
                                <a class="block" href="#">About us</a>
                                <a class="block" href="#">History</a>
                                <a class="block" href="#">Strategic Plan & Roadmap</a>
                                <a class="block" href="#">Implementation & Operations</a>
                                <a class="block" href="#">Global Partnership & Tourism</a>
                                <a class="block" href="#">Budget Summary</a>
                                <a class="block" href="#">Financial Sustainability</a>
                            </div>
                        </div>

                        <!-- Contact Us -->
                        <div>
                            <button class="w-full text-left hover:underline" data-toggle="contact">Contact
                                Us</button>
                            <div class="hidden ml-4 mt-2 space-y-2 text-sm" id="contact-submenu">
                                <a href="#">Contact Us</a>
                                <a href="#">FAQ’s</a>
                            </div>
                        </div>

                        <a class="block hover:underline" href="#">Donate</a>
                    </div>
                </nav>
            </header>
            <div class="space-y-24">
                <section class=" min-h-[40vh] flex items-center text-white">
                    <div class="w-[90%] mx-auto space-y-6">
                        <h1 class="normal-case text-5xl/15  tracking-wider max-w-3xl">Dream to Build a
                            world class hospital in Ghana </h1>
                        <p class="text-lg/6 max-w-xl">It will provide excellent care, advanced surgery, research and
                            training.
                            Ghana is the location but the quality will be global</p>
                    </div>
                </section>

                <section class="pt-80 pb-50">
                    <div class="w-[90%] text-white mx-auto space-y-20">
                        <h1
                            class="text-5xl leading-15 w-[90%] normal-case md:max-w-3xl md:text-center mx-auto  tracking-wider">
                            Why This Hospital Matters Globally</h1>
                        <div class="flex justify-between">
                            <div class="hidden md:block w-[50%] h-[20vh]">
                                <img class="block" src="{{ asset('assets/images/globe_plexus_transp.png') }}"
                                     alt="globe">
                            </div>
                            <div class="space-y-6">
                                <p class="text-md/14 max-w-xl">Plexus Medical City aims to set a new standard for
                                    healthcare excellence in West
                                    Africa by providing world-class medical services that eliminate the need for
                                    patients to travel abroad for advanced treatment.The facility will offer highly
                                    specialized care, including robotic surgery and organ transplants, while fostering
                                    innovation and research in the region.</p>
                                <p class="text-md/14 max-w-xl"> By combining cutting-edge technology with
                                    expert medical professionals, Plexus Medical City envisions transforming Ghana into
                                    a premier healthcare hub that attracts patients, specialists, and researchers from
                                    across the globe.</p>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="">
                    <div
                         class="md:w-[90%] mx-auto border border-transparent md:backdrop-blur-sm md:outline outline-white/30 bg-white/10 text-white p-6 md:rounded-[30px] shadow-lg min-h-[100vh] flex">
                        <div
                             class="min-h-[100vh] w-full  md:bg-[linear-gradient(to_top,_#fff_5%,_#f8f8f8_20%,_#f8f8f8_40%,_#f8f8f8_80%,_#f8f8f8_100%)] rounded-[30px] md:text-[#1b2269] pt-15">
                            <h1 class="text-5xl text-center"> What We Will Build</h1 class="text-5xl text-center">

                            <div
                                 class="text-[#070716] md:px-10 py-20 grid gap-y-8 md:grid-cols-3 md:gap-8 md:text-[#0f0f2f]">
                                <div class="rounded-lg shadow-md bg-white">
                                    <img class="block h-[200px] w-full  rounded-tr-lg rounded-tl-lg"
                                         src="{{ asset('/assets/images/futuristic_hospital.jpg') }}"
                                         alt="Futuristic Hospital">
                                    <div class="py-4 px-8 space-y-4">
                                        <h4 class="text-2xl">Hospital Facilities</h4>
                                        <p class="text-md/14 text-justify ">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Vitae aspernatur quas
                                            mollitia commodi ipsa magni rem eum odit, nihil laboriosam itaque
                                            consequuntur
                                            quis tempora consequatur temporibus officia natus officiis quod.</p>
                                    </div>
                                </div>

                                <div class="rounded-lg shadow-md bg-white">
                                    <img class="block h-[200px] w-full  rounded-tr-lg rounded-tl-lg"
                                         src="{{ asset('/assets/images/virtual_realityre_image_healthcare_personnels.jpg') }}"
                                         alt="Futuristic Hospital">
                                    <div class="py-4 px-8 space-y-4">
                                        <h4 class="text-2xl">Surgical Wing</h4>
                                        <p class="text-md/14 text-justify ">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Vitae aspernatur quas
                                            mollitia commodi ipsa magni rem eum odit, nihil laboriosam itaque
                                            consequuntur
                                            quis tempora consequatur temporibus officia natus officiis quod.</p>
                                    </div>
                                </div>

                                <div class="rounded-lg shadow-md bg-white">
                                    <img class="block h-[200px] w-full rounded-tr-lg rounded-tl-lg"
                                         src="{{ asset('/assets/images/research_training_center.jpg') }}"
                                         alt="Futuristic Hospital">
                                    <div class="py-4 px-8 space-y-4">
                                        <h4 class="text-2xl">Research & Training</h4>
                                        <p class="text-md/14 text-justify ">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Vitae aspernatur quas
                                            mollitia commodi ipsa magni rem eum odit, nihil laboriosam itaque
                                            consequuntur
                                            quis tempora consequatur temporibus officia natus officiis quod.</p>
                                    </div>
                                </div>

                                <div class="rounded-lg shadow-md bg-white">
                                    <img class="block h-[200px] w-full rounded-tr-lg rounded-tl-lg"
                                         src="{{ asset('/assets/images/private_rooms.jpg') }}"
                                         alt="Futuristic Hospital">
                                    <div class="py-4 px-8 space-y-4">
                                        <h4 class="text-2xl">Patient Care</h4>
                                        <p class="text-md/14 text-justify ">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Vitae aspernatur quas
                                            mollitia commodi ipsa magni rem eum odit, nihil laboriosam itaque
                                            consequuntur
                                            quis tempora consequatur temporibus officia natus officiis quod.</p>
                                    </div>
                                </div>

                                <div class="rounded-lg shadow-md bg-white">
                                    <img class="block h-[200px] w-full  rounded-tr-lg rounded-tl-lg"
                                         src="{{ asset('/assets/images/doctors_analizing_organs.jpg') }}"
                                         alt="Futuristic Hospital">
                                    <div class="py-4 px-8 space-y-4">
                                        <h4 class="text-2xl">Technology & Data</h4>
                                        <p class="text-md/14 text-justify ">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Vitae aspernatur quas
                                            mollitia commodi ipsa magni rem eum odit, nihil laboriosam itaque
                                            consequuntur
                                            quis tempora consequatur temporibus officia natus officiis quod.</p>
                                    </div>
                                </div>

                                <div class="rounded-lg shadow-md bg-white">
                                    <img class="block h-[200px] w-full  rounded-tr-lg rounded-tl-lg"
                                         src="{{ asset('/assets/images/futuristic_hospital.jpg') }}"
                                         alt="Futuristic Hospital">
                                    <div class="py-4 px-8 space-y-4">
                                        <h4 class="text-2xl">Sustainability</h4>
                                        <p class="text-md/14 text-justify ">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Vitae aspernatur quas
                                            mollitia commodi ipsa magni rem eum odit, nihil laboriosam itaque
                                            consequuntur
                                            quis tempora consequatur temporibus officia natus officiis quod.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
        <div class="h-screen pb-60">
            <main class="">
                <section>
                    <div
                         class="bg-gray-800/80 bg-[url(/public/assets/images/plexus_city_day.jpg)] bg-cover bg-blend-overlay w-full h-screen flex flex-col justify-center">
                        <div class="md:w-[80%] mx-auto space-y-6 text-white">
                            <h1 class="text-5xl font-extrabold tracking ">About Us</h1>
                            <p class="max-w-xs">Our mission is to provide world class health care to west Africa.</p>
                        </div>
                    </div>
                    <div class="md:w-[75%]  mx-auto min-h-[40vh] py-25 space-y-15">
                        <h1 class="text-5xl text-center">Our Story</h1>
                        <div class="px-10 grid gap-y-6 md:grid-cols-3 md:gap-20 md:px-0">
                            <div class="md:border-r md:pr-20 space-y-4 border-[#e4e4e4]">
                                <h2 class="text-xl">History of Company</h2>
                                <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Non soluta necessitatibus
                                    hic porro illum atque saepe perspiciatis consectetur minima labore ipsum minus,
                                    repellat expedita similique, fuga officiis, inventore reprehenderit aperiam?</p>
                            </div>

                            <div class="md:border-r md:pr-20 space-y-4 border-[#e4e4e4]">
                                <h2 class="text-xl">Vision</h2>
                                <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Non soluta necessitatibus
                                    hic porro illum atque saepe perspiciatis consectetur minima labore ipsum minus,
                                    repellat expedita similique, fuga officiis, inventore reprehenderit aperiam?</p>
                            </div>

                            <div class="space-y-4 border-[#e4e4e4]">
                                <h2 class="text-xl">Mission</h2>
                                <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Non soluta necessitatibus
                                    hic porro illum atque saepe perspiciatis consectetur minima labore ipsum minus,
                                    repellat expedita similique, fuga officiis, inventore reprehenderit aperiam?</p>
                            </div>

                            <div class="md:border-r md:pr-20 space-y-4 border-[#e4e4e4]">
                                <h2 class="text-xl">Strategic Goals</h2>
                                <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Non soluta necessitatibus
                                    hic porro illum atque saepe perspiciatis consectetur minima labore ipsum minus,
                                    repellat expedita similique, fuga officiis, inventore reprehenderit aperiam?</p>
                            </div>

                            <div class="md:border-r md:pr-20 space-y-4 border-[#e4e4e4]">
                                <h2 class="text-xl">Expected Global Impact</h2>
                                <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Non soluta necessitatibus
                                    hic porro illum atque saepe perspiciatis consectetur minima labore ipsum minus,
                                    repellat expedita similique, fuga officiis, inventore reprehenderit aperiam?</p>
                            </div>

                            <div class="space-y-4 border-[#e4e4e4]">
                                <h2 class="text-xl">Strategic Goals</h2>
                                <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Non soluta necessitatibus
                                    hic porro illum atque saepe perspiciatis consectetur minima labore ipsum minus,
                                    repellat expedita similique, fuga officiis, inventore reprehenderit aperiam?</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                         class="bg-gray-200/50 md:bg-[url(/public/assets/images/roadm2222ap.svg.svg)] bg-top min-h-[250vh] pt-20">
                    <div class="min-h-[250vh] md:w-[75%] mx-auto flex flex-col justify-between py-5 pb-30">
                        <h1
                            class="text-6xl md:text-blue-800/80 font-extrabold tracking text-center md:max-w-xl mx-auto">
                            Strategic Plan
                            and Road Map</h1>
                        <div class="min-h-[30vh] pt-40 grid md:grid-cols-3 md:gap-x-10 gap-y-30">
                            <div
                                 class="w-[90%] mx-auto md:w-full relative border min-h-[20vh] pt-25 rounded-lg shadow-sm px-10 pb-10 border-green-300 bg-white">
                                <div
                                     class="absolute -top-1/4 left-1/2 -translate-x-1/2 border rounded-[50%] p-4 bg-white border-green-300">
                                    <img src="{{ asset('/assets/images/financial_plan.svg') }}" alt="">
                                </div>

                                <div class="space-y-4">
                                    <h2 class="text-xl text-center">Financial Plan</h2>
                                    <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Culpa a doloremque,
                                        adipisci laudantium animi accusantium corporis. Hic asperiores, doloribus, cum
                                        ipsa consequuntur tenetur quae consequatur quasi esse iusto similique quis.</p>
                                </div>
                            </div>

                            <div
                                 class="w-[90%] mx-auto md:w-full relative border min-h-[20vh] pt-25 rounded-lg shadow-sm px-10 pb-10 border-blue-700 bg-white">
                                <div
                                     class="absolute -top-1/4 left-1/2 -translate-x-1/2 border rounded-[50%] p-4 bg-white border-blue-700">
                                    <img src="{{ asset('/assets/images/legal_regulatory.svg') }}" alt="">
                                </div>

                                <div class="space-y-4">
                                    <h2 class="text-xl text-center">Legal and Regulatory Compliance</h2>
                                    <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Culpa a doloremque,
                                        adipisci laudantium animi accusantium corporis. Hic asperiores, doloribus, cum
                                        ipsa consequuntur tenetur quae consequatur quasi esse iusto similique quis.</p>
                                </div>
                            </div>

                            <div
                                 class="w-[90%] mx-auto md:w-full relative border min-h-[20vh] pt-25 rounded-lg shadow-sm px-10 pb-10 border-red-700 bg-white">
                                <div
                                     class="absolute -top-1/4 left-1/2 -translate-x-1/2 border rounded-[50%] p-4 bg-white border-red-700">
                                    <img src="{{ asset('/assets/images/marketing_patient_engagement.svg') }}"
                                         alt="">
                                </div>

                                <div class="space-y-4">
                                    <h2 class="text-xl text-center"> Marketing and Patient Engagement</h2>
                                    <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Culpa a doloremque,
                                        adipisci laudantium animi accusantium corporis. Hic asperiores, doloribus, cum
                                        ipsa consequuntur tenetur quae consequatur quasi esse iusto similique quis.</p>
                                </div>
                            </div>

                            <div
                                 class="w-[90%] mx-auto md:w-full relative border min-h-[20vh] pt-25 rounded-lg shadow-sm px-10 pb-10 border-green-900 bg-white">
                                <div
                                     class="absolute -top-1/4 left-1/2 -translate-x-1/2 border rounded-[50%] p-4 bg-white border-green-900">
                                    <img src="{{ asset('/assets/images/monitoring_evaluation.svg') }}"
                                         alt="">
                                </div>

                                <div class="space-y-4">
                                    <h2 class="text-xl text-center"> Monitoring and Evaluation</h2>
                                    <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Culpa a doloremque,
                                        adipisci laudantium animi accusantium corporis. Hic asperiores, doloribus, cum
                                        ipsa consequuntur tenetur quae consequatur quasi esse iusto similique quis.</p>
                                </div>
                            </div>

                            <div
                                 class="w-[90%] mx-auto md:w-full relative border min-h-[20vh] pt-25 rounded-lg shadow-sm px-10 pb-10 border-black/30 bg-white">
                                <div
                                     class="absolute -top-1/4 left-1/2 -translate-x-1/2 border rounded-[50%] p-4 bg-white border-black/30">
                                    <img src="{{ asset('/assets/images/expansion_future_growth.svg') }}"
                                         alt="">
                                </div>

                                <div class="space-y-4">
                                    <h2 class="text-xl text-center">Expansion and Future Growth</h2>
                                    <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Culpa a doloremque,
                                        adipisci laudantium animi accusantium corporis. Hic asperiores, doloribus, cum
                                        ipsa consequuntur tenetur quae consequatur quasi esse iusto similique quis.</p>
                                </div>
                            </div>

                            <div
                                 class="w-[90%] mx-auto md:w-full relative border min-h-[20vh] pt-25 rounded-lg shadow-sm px-10 pb-10 border-amber-600 bg-white">
                                <div
                                     class="absolute -top-1/4 left-1/2 -translate-x-1/2 border rounded-[50%] p-4 bg-white border-amber-600">
                                    <img src="{{ asset('/assets/images/long_term_vision.svg') }}" alt="">
                                </div>

                                <div class="space-y-4">
                                    <h2 class="text-xl text-center">Long Term Vision for Excellence</h2>
                                    <p class="text-md/14 text-[#333]/80">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Culpa a doloremque,
                                        adipisci laudantium animi accusantium corporis. Hic asperiores, doloribus, cum
                                        ipsa consequuntur tenetur quae consequatur quasi esse iusto similique quis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="min-h-screen">
                    <div class="w-[75%] mx-auto min-h-screen">
                        <div></div>
                        <div></div>
                    </div>

                </section> --}}
                <section
                         class="min-h-[150vh] bg-gradient-to-b from-[#0f0f2f] via-[#1e1e7a] to-[#080819] text-white py-20 px-6 md:px-16">
                    <div class="max-w-7xl mx-auto">
                        <!-- Heading -->
                        <div class="text-center mb-16">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 tracking-tight">
                                Building a Healthcare Powerhouse in West Africa
                            </h2>
                            <p class="text-gray-300 max-w-3xl mx-auto leading-relaxed">
                                Our strategic pillars are designed to make <span
                                      class="text-blue-400 font-semibold">Plexus Medical City</span>
                                a world-class center of excellence — redefining healthcare, research, and innovation
                                across the region.
                            </p>
                        </div>

                        <!-- Grid Layout -->
                        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                            <!-- 1. Human Resources and Staff Development -->
                            <div
                                 class="bg-white/10 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-blue-400 transition-all">
                                <h3 class="text-2xl font-semibold mb-4 text-blue-300">Human Resources & Staff
                                    Development</h3>
                                <ul class="space-y-2 text-gray-200 text-sm leading-relaxed">
                                    <li>Recruit top-tier medical, nursing, and administrative professionals.</li>
                                    <li>Provide continuous professional training and mentorship.</li>
                                    <li>Develop leadership pipelines and career growth pathways.</li>
                                    <li>Offer competitive compensation and benefits.</li>
                                    <li>Foster a culture of teamwork and patient-centered care.</li>
                                </ul>
                            </div>

                            <!-- 2. Operations and Service Delivery -->
                            <div
                                 class="bg-white/10 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-blue-400 transition-all">
                                <h3 class="text-2xl font-semibold mb-4 text-blue-300">Operations & Service Delivery
                                </h3>
                                <ul class="space-y-2 text-gray-200 text-sm leading-relaxed">
                                    <li>Implement electronic medical records and hospital management systems.</li>
                                    <li>Ensure efficient patient flow and high hygiene standards.</li>
                                    <li>Maintain safety and infection control excellence.</li>
                                    <li>Introduce patient feedback for continuous improvement.</li>
                                </ul>
                            </div>

                            <!-- 3. Technology Integration and Innovation -->
                            <div
                                 class="bg-white/10 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-blue-400 transition-all">
                                <h3 class="text-2xl font-semibold mb-4 text-blue-300">Technology & Innovation</h3>
                                <ul class="space-y-2 text-gray-200 text-sm leading-relaxed">
                                    <li>Use advanced robotics and telemedicine for treatment and consultation.</li>
                                    <li>Apply data analytics to optimize patient care and operations.</li>
                                    <li>Regularly upgrade tech infrastructure to global standards.</li>
                                    <li>Promote a culture of medical innovation and efficiency.</li>
                                </ul>
                            </div>

                            <!-- 4. Research and Academic Excellence -->
                            <div
                                 class="bg-white/10 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-blue-400 transition-all">
                                <h3 class="text-2xl font-semibold mb-4 text-blue-300">Research & Academic Excellence
                                </h3>
                                <ul class="space-y-2 text-gray-200 text-sm leading-relaxed">
                                    <li>Partner with global research institutions and universities.</li>
                                    <li>Encourage medical publications, conferences, and collaborations.</li>
                                    <li>Translate research into improved clinical outcomes.</li>
                                    <li>Support postgraduate and specialist training programs.</li>
                                </ul>
                            </div>

                            <!-- 5. Risk Management & Contingency -->
                            <div
                                 class="bg-white/10 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-blue-400 transition-all">
                                <h3 class="text-2xl font-semibold mb-4 text-blue-300">Risk Management & Contingency
                                </h3>
                                <ul class="space-y-2 text-gray-200 text-sm leading-relaxed">
                                    <li>Identify and mitigate financial, regulatory, and clinical risks.</li>
                                    <li>Develop strong emergency and disaster response systems.</li>
                                    <li>Maintain insurance coverage for staff and assets.</li>
                                    <li>Ensure care continuity during unexpected events.</li>
                                </ul>
                            </div>

                            <!-- 6. Sustainability & Responsibility -->
                            <div
                                 class="bg-white/10 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-blue-400 transition-all">
                                <h3 class="text-2xl font-semibold mb-4 text-blue-300">Sustainability & Responsibility
                                </h3>
                                <ul class="space-y-2 text-gray-200 text-sm leading-relaxed">
                                    <li>Adopt green energy and eco-friendly waste management systems.</li>
                                    <li>Engage local communities in public health outreach.</li>
                                    <li>Promote staff wellness and patient wellbeing initiatives.</li>
                                    <li>Commit to ethical and transparent healthcare practices.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Closing Note -->
                        <div class="text-center mt-20 max-w-3xl mx-auto">
                            <p class="text-gray-300 text-lg leading-relaxed">
                                At <span class="font-semibold text-blue-400">Plexus Medical City</span>, we’re not just
                                building a hospital —
                                we’re shaping the future of healthcare in Africa through innovation, integrity, and
                                impact.
                            </p>
                        </div>
                    </div>
                </section>
                {{-- resources/views/components/global-partnerships.blade.php --}}
                <section class="bg-gradient-to-br from-[#0a2540] to-[#1b4965] text-white py-24 px-6 md:px-16 lg:px-24">
  <div class="max-w-7xl mx-auto space-y-16">
    <!-- Header -->
    <div class="text-center space-y-4">
      <h2 class="text-3xl md:text-4xl font-bold tracking-wide uppercase">
        Global Partnerships, Medical Tourism & International Impact
      </h2>
      <p class="text-gray-300 max-w-3xl mx-auto">
        Building a globally recognized healthcare institution through innovation, collaboration,
        and international excellence.
      </p>
    </div>

    <!-- Content Grid -->
    <div class="grid md:grid-cols-2 gap-12">
      <!-- Left Column -->
      <div class="space-y-10">
        <div>
          <h3 class="text-xl font-semibold text-blue-300 mb-3">Global Partnerships and Collaborations</h3>
          <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li>Collaborate with world-leading hospitals, universities, and research institutions.</li>
            <li>Exchange expertise through visiting specialists and fellowship programmes.</li>
            <li>Engage in joint research for healthcare innovation and knowledge exchange.</li>
            <li>Partner with NGOs and global health organizations for community impact.</li>
          </ul>
        </div>

        <div>
          <h3 class="text-xl font-semibold text-blue-300 mb-3">Medical Tourism Strategy</h3>
          <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li>Position Ghana as a premier destination for world-class medical care.</li>
            <li>Provide multilingual support, luxury accommodation, and travel guidance.</li>
            <li>Promote through international campaigns and global healthcare networks.</li>
          </ul>
        </div>

        <div>
          <h3 class="text-xl font-semibold text-blue-300 mb-3">International Accreditation</h3>
          <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li>Achieve JCI and ISO accreditation to ensure world-class standards.</li>
            <li>Maintain ethical, safe, and globally recognized healthcare practices.</li>
          </ul>
        </div>
      </div>

      <!-- Right Column -->
      <div class="space-y-10">
        <div>
          <h3 class="text-xl font-semibold text-blue-300 mb-3">Telemedicine and Digital Health</h3>
          <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li>Expand telemedicine to serve patients globally with virtual consultations.</li>
            <li>Partner with international insurance providers for seamless access.</li>
            <li>Enhance global reach with innovative digital healthcare platforms.</li>
          </uhttps://t.co/QdeNEmpNfIMementol>
        </div>

        <div>
          <h3 class="text-xl font-semibold text-blue-300 mb-3">Research Leadership & Global Impact</h3>
          <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li>Lead studies on Africa’s most pressing diseases and global health challenges.</li>
            <li>Publish high-impact findings and train medical professionals across Africa.</li>
            <li>Translate research into practical healthcare solutions.</li>
          </ul>
        </div>

        <div>
          <h3 class="text-xl font-semibold text-blue-300 mb-3">Long-Term Global Vision</h3>
          <ul class


            </main>
        </div>
    </body>

</html>
