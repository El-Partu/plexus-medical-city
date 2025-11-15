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

    <section class="min-h-[140vh] bg-[#707FA5] py-16 text-center ">
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

    <section class="bg-[#bbc0cecc] min-h-[140vh] pt-16">
        <div class="lg:max-w-[80%] mx-auto space-y-20 md:space-y-10">
            <h1 class="text-5xl text-wrap font-[calligraffitti] text-center">Implementation and Operational Management
            </h1>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#132272] tracking-wider">01
                    </h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Governance and Leadership</h4>
                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
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
                        <img class="w-[50px]" src="{{ asset('/assets/images/fluent-mdl2_party-leader.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>

                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#2744E5] tracking-wider">
                        02</h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Human Resources and
                                Staff Development</h4>
                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
                                <li>
                                    Talent Recruitment
                                </li>
                                <li>
                                    Continuous Training
                                </li>
                                <li>
                                    Mentorship and Growth
                                </li>
                                <li>
                                    Competitive Rewards
                                </li>
                                <li>
                                    Workplace Culture
                                </li>
                            </ul>
                        </div>
                        <img class="w-[50px]"
                             src="{{ asset('/assets/images/streamline-ultimate_labor-hands-action-bold.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>

                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#1A2D98] tracking-wider">
                        03</h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Operations and Service
                                Delivery</h4>
                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
                                <li>
                                    Standardized Protocols
                                </li>
                                <li>
                                    Digital Integration
                                </li>
                                <li>
                                    Patient Flow Optimization
                                </li>
                                <li>
                                    Safety and Quality
                                </li>
                                <li>
                                    Feedback and Improvement
                                </li>
                            </ul>
                        </div>
                        <img class="w-[50px]" src="{{ asset('/assets/images/carbon_operations-field.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>

                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#BDC7FF] tracking-wider">
                        04</h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Technology Integration
                                and Innovation</h4>
                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
                                <li>
                                    Advanced Equipment
                                </li>
                                <li>
                                    Connected Care
                                </li>
                                <li>
                                    Data Intelligence
                                </li>
                                <li>
                                    Continuous Upgrades
                                </li>
                                <li>
                                    Innovation Culture
                                </li>
                            </ul>
                        </div>
                        <img class="w-[50px]" src="{{ asset('/assets/images/hugeicons_ai-innovation-01.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>

                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#B5B5B8] tracking-wider">
                        05</h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Research and
                                Academic Excellence</h4>
                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
                                <li>
                                    Research Leadership
                                </li>
                                <li>
                                    Global Collaboration
                                </li>
                                <li>
                                    Knowledge Impact
                                </li>
                                <li>
                                    Clinical Integration
                                </li>
                                <li>
                                    Education and Training
                                </li>
                            </ul>
                        </div>
                        <img class="w-[50px]" src="{{ asset('/assets/images/iconoir_brain-research.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>

                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#32394A] tracking-wider">
                        06</h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Risk Management and
                                Contingency Planning</h4>

                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
                                <li>
                                    Monitor all risks(financial, operational, etc.)
                                </li>
                                <li>
                                    Develop crisis protocols
                                </li>
                                <li>
                                    Maintain full insurance coverage strategies.
                                </li>
                                <li>
                                    Guarantee uninterrupted patient
                                    care
                                </li>
                                <li>
                                    Feedback and Improvement
                                </li>
                            </ul>
                        </div>
                        <img class="w-[50px]" src="{{ asset('/assets/images/healthicons_risk-analysis-24px.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>

                <div class="relative">
                    <h1 class="hidden md:block text-[14rem] font-extrabold text-center text-[#090A10] tracking-wider">
                        07</h1>
                    <div
                         class="flex flex-col items-center z-20 border-t-6 bg-white md:-translate-y-[50%]  lg:-translate-x-5  px-6 space-y-8 py-4">
                        <div class="space-y-4">
                            <h4 class="font-bold">Sustainability and
                                Corporate Responsibilty</h4>
                            <ul class="list-disc list-inside text-black/80 text-sm space-y-2 ">
                                <li>
                                    Green Infrastructure
                                </li>
                                <li>
                                    Ethical Commitment
                                </li>
                                <li>
                                    Wellbeing Initiatives
                                </li>
                                <li>
                                    Accountability and Impact
                                </li>
                                <li>
                                    Community Engagement
                                </li>
                            </ul>
                        </div>
                        <img class="w-[50px]"
                             src="{{ asset('/assets/images/streamline-ultimate_job-responsibility-bag-hand-bold.svg') }}"
                             alt="Party Leader">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-[240vh]">
        <div class="md:max-w-[85%] mx-auto space-y-16">
            <h1 class="font-[calligraffitti] text-5xl/20 text-center text-wrap lg:max-w-[50%] mx-auto py-16 bg-white">
                Global
                Partnership, Medical
                Tourism and international impact</h1>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-y-50 md:gap-x-10">
                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">1</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            Global partnerships and collaboration</h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm">
                            <li>
                                Strategic Collaborations
                            </li>
                            <li>
                                Knowledge Exchange
                            </li>
                            <li>
                                Research Synergy
                            </li>
                            <li>
                                Technology Access
                            </li>
                            <li>
                                Global and Community Impact
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">2</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            Medical Tourism Strategy</h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm pl-4">
                            <li>
                                Top-tier destination for international patients
                            </li>
                            <li>
                                Offer concierge support
                            </li>
                            <li>
                                Develop all-inclusive medical/wellness packages
                            </li>
                            <li>
                                Promote internationally
                            </li>
                            <li>
                                Strengthen Ghana's healthcare reputation
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">3</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            International Accreditation and Standards</h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm pl-4">
                            <li>
                                World-Class Accreditation
                            </li>
                            <li>
                                Global Compliance
                            </li>
                            <li>
                                Research Synergy
                            </li>
                            <li>
                                Continuous Quality Improvement
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">4</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            Telemedicine and Digital Health</h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm pl-4">
                            <li>
                                Expand telemedicine worldwide
                            </li>
                            <li>
                                Offer online consultations and remote monitoring
                            </li>
                            <li>
                                Partner with international insurers
                            </li>
                            <li>
                                Use digital platforms for convenience
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">5</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            Research Leadership and Global Contribution </h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm pl-4">
                            <li>
                                Focused Research Agenda
                            </li>
                            <li>
                                Global Contribution
                            </li>
                            <li>
                                Translational Impact
                            </li>
                            <li>
                                Training Leadership
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">6</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            Community Engagement and Ethical Duty </h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm pl-4">
                            <li>
                                Focused Research Agenda
                            </li>
                            <li>
                                Global Contribution
                            </li>
                            <li>
                                Translational Impact
                            </li>
                            <li>
                                Training Leadership
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="flex relative">
                    <h1 class="text-[35rem]/40 font-[Karantina] z-10">7</h1>
                    <div class="">
                        <h4
                            class="font-extrabold text-black/80 border-t-4 border-b-4  absolute z-30 bg-white py-2 -translate-x-30 top-0 text-sm w-[80%] text-center">
                            Long-Term Global Vision </h4>
                        <ol class="mt-20 space-y-2 list-disc list-inside text-sm pl-4">
                            <li>
                                Africa's foremost healthcare hub
                            </li>
                            <li>
                                New standards in care, research, and education
                            </li>
                            <li>
                                Drive medical science via innovation
                            </li>
                            <li>
                                Enduring legacy of African excellence
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-screen bg-[#1A2D98E5] py-20">
        <div class="max-w-[80%] mx-auto space-y-20">
            <h1 class="text-5xl font-[calligraffitti] text-center text-white">Budget Summary</h1>

            <!-- Prepare a DOM with a defined width and height for ECharts -->
            <div class="max-w-[80%] mx-auto space-y-8">
                <div class="">
                    {{-- <h3 class="w-[50%] font-extrabold text-xl text-white pr-0">CAPITAL EXPENDITURE (CAPEX):</h3> --}}
                    <p class="text-left text-white/80"><span class="font-extrabold text-xl text-white mr-4">CAPITAL
                            EXPENDITURE (CAPEX):</span>Estimated between <b>US$256</b> million and <b>US$780</b>
                        million, with a
                        midpoint of <b>US$530</b> million allocated for Phase I development. This includes
                        infrastructure,
                        medical equipment, and core facility construction.</p>
                    <div class="md:mx-auto md:w-3/4 h-[40vh]" id="main"></div>
                </div>
                <div class="">
                    {{-- <h3 class="w-[50%] font-extrabold text-xl text-white pr-0">CAPITAL EXPENDITURE (CAPEX):</h3> --}}
                    <p class="text-left text-white/80"><span class="font-extrabold text-xl text-white mr-4">OPERATING
                            EXPENDITURE (OPEX):</span>Projected between <b>US$80</b> million and <b>US$130</b>million
                        per year, with a
                        midpoint of <b>US$105</b> million. This covers staffing, maintenance, utilities, medical
                        supplies, and
                        administrative operations.</p>

                    <div class="md:mx-auto md:w-3/4 h-[40vh]" id="main--1"></div>
                </div>
                <h1 class="text-3xl text-white font-extrabold mt-16">Total Start-up Expenditure: US$885million - US$1.5
                    billion.</h1>
            </div>
            <script>
                var myChart = echarts.init(document.getElementById('main'));
                var myChart1 = echarts.init(document.getElementById('main--1'));

                var option = {
                    legend: {
                        orient: window.innerWidth < 768 ? 'horizontal' : 'vertical', // 👈 responsive orientation
                        x: window.innerWidth < 768 ? 'center' : 'right',
                        y: window.innerWidth < 768 ? 'bottom' : 'center',
                        // textStyle:{
                        //     color:'#fff'
                        //     fontSize:14
                        // },
                        data: [
                            'Estimated US$256M - US$780M',
                            'Midpoint US$530M for Phase 1'
                        ],
                    },
                    series: [{
                        type: 'pie',
                        radius: ['50%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                            show: false,
                            position: 'center'
                        },
                        labelLine: {
                            show: false
                        },
                        emphasis: {
                            label: {
                                show: true,
                                fontSize: 20,
                                fontWeight: 'bold',
                                color: '#fff'
                            }
                        },
                        data: [{
                                value: 780,
                                name: 'Estimated US$256M - US$780M'
                            },
                            {
                                value: 530,
                                name: 'Midpoint US$530M for Phase 1'
                            }
                        ]
                    }]
                };
                var option2 = {
                    legend: {
                        orient: window.innerWidth < 768 ? 'horizontal' : 'vertical', // 👈 responsive orientation
                        x: window.innerWidth < 768 ? 'center' : 'right',
                        y: window.innerWidth < 768 ? 'bottom' : 'center',
                        // textStyle:{
                        //     color:'#fff'
                        //     fontSize:14
                        // },
                        data: [
                            'Estimated US$80M - US$130M',
                            'Midpoint US$105M for Phase 1'
                        ],
                    },
                    series: [{
                        type: 'pie',
                        radius: ['50%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                            show: false,
                            position: 'center'
                        },
                        labelLine: {
                            show: false
                        },
                        emphasis: {
                            label: {
                                show: true,
                                fontSize: 20,
                                fontWeight: 'bold',
                                color: '#fff'
                            }
                        },
                        data: [{
                                value: 130,
                                name: 'Estimated US$80M - US$130M'
                            },
                            {
                                value: 105,
                                name: 'Midpoint US$105M for Phase 1'
                            }
                        ]
                    }]
                };


                myChart.setOption(option);
                myChart1.setOption(option2);

                // 🌀 Handle window resize


                window.addEventListener('resize', function() {
                    myChart1.resize();

                    // Optional: re-adjust legend for responsiveness
                    const isSmall = window.innerWidth < 768;
                    myChart1.setOption({
                        legend: {
                            orient: isSmall ? 'horizontal' : 'vertical',
                            x: isSmall ? 'center' : 'right',
                            y: isSmall ? 'bottom' : 'center'
                        }
                    });
                });
            </script>

        </div>
    </section>

    <section class="min-h-[450vh] md:min-h-[400vh]">
        <div class="py-16 bg-[#0E87CC4D] space-y-16">
            <h1 class="lg:max-w-[38%] text-5xl/20 font-[calligraffitti] mx-auto text-center">Financial Sustainability
                and
                Long-Term Growth</h1>
            <div class="space-y-20">
                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">1</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Capital
                            Investment</span>

                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>Strategic Funding
                        </li>
                        <li>
                            Phased Development
                        </li>
                        <li>
                            Quality Investment
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">2</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Running
                            Costs</span>

                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Operational Expenses
                        </li>
                        <li>
                            Professional Growth
                        </li>
                        <li>
                            Efficient Management
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">3</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Sources
                            of Income</span>

                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Medical service revenue
                        </li>
                        <li>
                            High-value services drive profit
                        </li>
                        <li>
                            Diversify income via patients (regional/international)
                        </li>
                        <li>
                            Supplement funding with grants/trials
                        </li>
                        <li>
                            Steady revenue from courses/workshops
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">4</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Plan
                            for Financial
                            Stability</span>

                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Sustainable Growth
                        </li>
                        <li>
                            Reinvestment Strategy
                        </li>
                        <li>
                            Accountability
                        </li>
                        <li>
                            Strategic Decision-Making
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">5</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Funding
                            Approach</span>
                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Strategic Funding
                        </li>
                        <li>
                            Phased Development
                        </li>
                        <li>
                            Quality Investment
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">6</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Future
                            Growth</span>
                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Strategic Funding
                        </li>
                        <li>
                            Phased Development
                        </li>
                        <li>
                            Quality Investment
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">7</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Measuring
                            Financial
                            Success</span>
                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Capacity Expansion
                        </li>
                        <li>
                            Regional Reach
                        </li>
                        <li>
                            Digital Expansion
                        </li>
                        <li>
                            Global Collaboration
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">8</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Financial
                            Risk
                            Management</span>
                    </div>
                    <ul class="pl-6 list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Maintain contingency reserves
                        </li>
                        <li>
                            Conduct annual financial risk assessments
                        </li>
                        <li>
                            Manage currency and interest rate fluctuations
                        </li>
                        <li>
                            Ensure stability with multiple revenue sources
                        </li>
                    </ul>
                </div>

                <div
                     class="relative flex flex-col items-center  md:max-w-[60%] lg:max-w-[60%] mx-auto md:px-8 py-4 rounded-[20px] bg-white">
                    <div class=flex>
                        <span
                              class="w-[20px] h-[20px] md:text-4xl font-extrabold bg-[#132272] text-white px-5 py-5  flex items-center justify-center rounded-[50%] md:min-w-[100px] md:min-h-[100px] text-center md:absolute bottom-1/6 left-2 md:top-1/2 md:-left-6 md:bottom-0 ">9</span>
                        <span
                              class="md:absolute text-black/90 bottom-2/3 md:min-h-[12vh] md:min-w-[40%] text-center px-4 pt-2 text-2xl inline-block -right-35 rounded-[20px] content-center font-black md:text-white md:bg-[#0E87CC]">Long-Term
                            Financial Vision</span>
                    </div>
                    <ul class="list-disc list-inside space-y-2 font-extrabold text-black/80">
                        <li>
                            Performance Tracking
                        </li>
                        <li>
                            ROI Measurement
                        </li>
                        <li>
                            Cost Efficiency
                        </li>
                        <li>
                            Reinvestment Ratio
                        </li>
                        <li>
                            Financial Independence
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
