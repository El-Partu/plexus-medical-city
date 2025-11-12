<x-main-layout>
    <section
             class="bg-[linear-gradient(to_bottom,_#192A55_20%,_#707FA5_60%,_#284388_80%,_#375CBB_100%)] min-h-[200vh] md:min-h-[180vh] pt-45">
        <div class="md:w-[80%] mx-auto flex justify-between items-start">
            <div class="bg-white rounded-[20px] px-10 py-8 lg:w-[60%] space-y-5">
                <h1 class="font-[Calligraffitti] text-6xl">About us</h1>
                <p class="leading-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis itaque error
                    voluptatibus modi
                    commodi accusantium quam, aperiam molestiae perferendis qui ut eveniet fugiat, voluptatum recusandae
                    saepe blanditiis consequatur ad tempore.</p>
                <div class="space-y-4">
                    <div class="flex space-x-5 px-4 py-4 shadow-sm  text-black/80 rounded-[20px] bg-[#ADD8E633]">
                        <img class="w-[40px]" src="{{ asset('/assets/images/material-symbols_strategy.svg') }}"
                             alt="Material Symbol">
                        <p class="leading-6">Redefine surgical excellence by offering advanced, high-precision
                            procedures
                            that meet and exceed global standards of safety and care.</p>

                    </div>
                    <div class="flex space-x-5 px-4 py-4 shadow-sm  text-black/80 rounded-[20px] bg-[#ADD8E633]">
                        <img class="w-[40px]" src="{{ asset('/assets/images/material-symbols_strategy.svg') }}"
                             alt="Material Symbol">
                        <p class="leading-6">Create a model of efficiency where resources from hospital beds to
                            technology are optimized to deliver seamless, patient-centered care.</p>

                    </div>
                    <div class="flex space-x-5 px-4 py-4 shadow-sm  text-black/80 rounded-[20px] bg-[#ADD8E633]">
                        <img class="w-[40px]" src="{{ asset('/assets/images/material-symbols_strategy.svg') }}"
                             alt="Material Symbol">
                        <p class="leading-6">Empower the next generation of healthcare leaders by training over 500
                            medical professionals each year through world-class education, innovation, and mentorship.
                        </p>

                    </div>
                    <div class="flex space-x-5 px-4 py-4 shadow-sm  text-black/80 rounded-[20px] bg-[#ADD8E633]">
                        <img class="w-[40px]" src="{{ asset('/assets/images/material-symbols_strategy.svg') }}"
                             alt="Material Symbol">
                        <p class="leading-6">Build long-term financial strength to ensure the hospital’s growth,
                            independence, and ability to reinvest in medical advancement.</p>

                    </div>
                    <div class="flex space-x-5 px-4 py-4 shadow-sm  text-black/80 rounded-[20px] bg-[#ADD8E633]">
                        <img class="w-[40px]" src="{{ asset('/assets/images/material-symbols_strategy.svg') }}"
                             alt="Material Symbol">
                        <p class="leading-6">Build long-term financial strength to ensure the hospital’s growth,
                            independence, and ability to reinvest in medical advancement.</p>

                    </div>
                </div>
            </div>

            <div class="relative hidden lg:block">
                <img class="block w-[95%] ml-auto rounded-[20px] " src="{{ asset('/assets/images/doctors_group.svg') }}"
                     alt="Group Picture of Doctor">
                <div
                     class="flex items-center justify-center pr-2 absolute w-[48%] h-[100px] right-0 -translate-y-10 rounded-[20px] bg-[linear-gradient(to_bottom,_#284388_80%,_#375CBB_100%)]">
                    <img class="w-[60px]" src="{{ asset('/assets/images/openmoji_location-indicator-red.svg') }}"
                         alt="">
                    <div>
                        <div class="flex space-x-4 space-y-2">
                            <span class="text-xl font-extrabold">4.5</span>
                            <div class="flex">
                                <span class="w-[30px]"><img src="{{ asset('/assets/images/full_star.svg') }}"
                                         alt="Full star"></span>
                                <span class="w-[30px]"><img src="{{ asset('/assets/images/full_star.svg') }}"
                                         alt="Full star"></span>
                                <span class="w-[30px]"><img src="{{ asset('/assets/images/full_star.svg') }}"
                                         alt="Full star"></span>
                                <span class="w-[30px]"><img src="{{ asset('/assets/images/full_star.svg') }}"
                                         alt="Full star"></span>
                                <span class="w-[30px]"><img src="{{ asset('/assets/images/half_star.svg') }}"
                                         alt="Full star"></span>
                            </div>
                        </div>
                        <span class="text-xl font-extrabold">Ghana, Accra</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-[140vh] bg-[#707FA5] pt-16 text-center ">
        <h1 class="text-6xl font-[Calligraffitti] text-white">History</h1>
        <div class="flex ">
            <div class="mt-14 space-y-16">
                <div class="md:w-[60%] text-white/80 rounded-[20px] px-5 py-10 bg-[#132272] mx-auto">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Sint minus distinctio quidem dicta
                    exercitationem eos nostrum asperiores, et praesentium possimus esse aliquam quis laudantium dolore
                    vero, quaerat error? At, corrupti?</div>
                <div
                     class="md:w-[60%] text-white/80 rounded-[20px] px-5 py-10 md:translate-x-[20rem] mx-auto bg-[#1A2D98]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint minus distinctio quidem dicta
                    exercitationem eos nostrum asperiores, et praesentium possimus esse aliquam quis laudantium dolore
                    vero, quaerat error? At, corrupti?</div>
            </div>
            <div
                 class="hidden md:block bg-[url(/public/assets/images/doctor_bg.svg)] bg-no-repeat bg-contain bg-top-left w-[80%] h-[80vh]">
            </div>
        </div>
    </section>

    <section
             class="bg-[url(/public/assets/images/d327099868ff2a0e580ee2a61d2c36c5-removebg-preview1.svg)] bg-contain min-h-[140vh] pt-16">
        <div class="lg:max-w-[80%] mx-auto space-y-16">
            <h1 class="text-6xl font-[Calligraffitti] text-center">Strategic Plan and Roadmap</h1>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[]">
                <div class="border rounded-[20px] px-16 py-6 bg-[#0E87CC] text-white space-y-4">
                    <h3 class="text-2xl">Financial Plan</h3>
                    <ol class="list-disc space-y-3 ">
                        <li>
                            Capital Expenditure
                        </li>
                        <li>
                            Operational Expenditure
                        </li>
                        <li>
                            Revenue Stream
                        </li>
                        <li>
                            Financial Sustainability
                        </li>
                        <li>
                            Funding Strategy
                        </li>
                    </ol>
                </div>

                <div class="border rounded-[20px] px-16 py-6 bg-[#0E87CC] text-white space-y-4">
                    <h3 class="text-2xl">Legal and Regulatory Compliance</h3>
                    <ol class="list-disc space-y-3 ">
                        <li>
                            Secure all permits/licenses
                        </li>
                        <li>
                            Follow Ghana Health Service rules
                        </li>
                        <li>
                            Achieve JCI/ISO certifications
                        </li>
                        <li>
                            Financial Sustainability
                        </li>
                        <li>
                            Comply with all relevant laws
                        </li>
                    </ol>
                </div>

                <div class="border rounded-[20px] px-16 py-6 bg-[#0E87CC] text-white space-y-4">
                    <h3 class="text-2xl">Marketing and
                        Patient Engagement</h3>
                    <ol class="list-disc space-y-3 ">
                        <li>
                            Promote as a regional center
                        </li>
                        <li>
                            Use digital/telemedicine outreach
                        </li>
                        <li>
                            Assist international patients
                        </li>
                        <li>
                            Ensure personalized care
                        </li>
                    </ol>
                </div>

                <div class="border rounded-[20px] px-16 py-6 bg-[#0E87CC] text-white space-y-4">
                    <h3 class="text-2xl">Monitoring and Evaluation</h3>
                    <ol class="list-disc space-y-3 ">
                        <li>
                            Track efficiency and patient outcomes regularly
                        </li>
                        <li>
                            Review financials quarterly
                        </li>
                        <li>
                            Monitor staff/research annually
                        </li>
                        <li>
                            Use data/feedback for improvement.
                        </li>
                    </ol>
                </div>

                <div class="border rounded-[20px] px-16 py-6 bg-[#0E87CC] text-white space-y-4">
                    <h3 class="text-2xl">Long Term Vision for Excellence</h3>
                    <ol class="list-disc space-y-3 ">
                        <li>
                            Be Africa's leading, globally recognized hospital.
                        </li>
                        <li>
                            Center of excellence for care, innovation, and training.
                        </li>
                        <li>
                            Develop top talent and nurture research.
                        </li>
                        <li>
                            Symbol of healthcare excellence for the future.
                        </li>
                    </ol>
                </div>

                <div class="border rounded-[20px] px-16 py-6 bg-[#0E87CC] text-white space-y-4">
                    <h3 class="text-2xl">Expansion and Future Growth</h3>
                    <ol class="list-disc space-y-3 ">
                        <li>
                            Expand capacity as demand grows
                        </li>
                        <li>
                            Strengthen telemedicine and international research.
                        </li>
                        <li>
                            Open satellite centers.
                        </li>
                        <li>
                            Invest continuously in new technology.
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-[#D3D7E3CC] min-h-screen pt-16">
        <div class="">
            <h1 class="text-6xl font-[calligraffitti] text-center">Implementation and Operational Management</h1>
            <div>
                <div>
                    <h1>01</h1>
                    <div>
                        <div>
                            <h4>Governance and Leadership</h4>
                            <ul>
                                <li>
                                    Organizational Structure
                                </li>
                                <li>
                                    Board of Directors
                                </li>
                                <li>
                                    Executive Leadership
                                </li>
                                <li>
                                    Committees and Oversight
                                </li>
                                <li>
                                    Transparency and Accountability
                                </li>
                            </ul>
                        </div>
                        <img src="{{ asset('/assets/images/fluent-mdl2:party-leader.svg') }}" alt="Party Leader">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
