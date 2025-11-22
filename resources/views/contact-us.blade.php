<x-main-layout>
    <section
             class="min-h-[120vh] relative pt-45 pb-16 md:pb-0 xl:pt-0 xl:bg-[url(/public/assets/images/contact_us.svg)] bg-no-repeat bg-right  bg-contain">
        <div class="relative">
            <img class=" hidden w-full h-full ml-auto xl:block" src="{{ asset('assets/images/contact_us.svg') }}" alt="background">
            <div class="xl:absolute top-0 left-0 w-full h-full">
                <div class="flex flex-col space-y-20 w-[90%] xl:flex-row justify-between xl:items-center h-[80%] mx-auto xl:w-[90%]">
                    <div class="border py-6 px-3 xl:w-[50%] xl:min-h-[80vh] xl:border-none">
                        <form class="xl:w-[85%] mx-auto space-y-8" method="" action="">
                            <h1 class="text-left text-2xl font-extrabold">Contact</h1>
                            <div class="md:w-[78%] space-y-12">
                                <div class="space-y-12 md:flex space-x-10">
                                    <div class="flex flex-col text-sm space-y-6">
                                        <label class="uppercase" for="firstname">First Name <span class="text-red-600 text-lg ml-2">*</span></label>
                                        <input class="px-2 py-1 outline-none border-b" id="firstname" name="firstname"
                                               type="text" placeholder="John">
                                    </div>
                                    <div class="flex flex-col text-sm space-y-6">
                                        <label class="uppercase" for="lastname">Last Name<span class="text-red-600 text-lg ml-2">*</span></label>
                                        <input class="px-2 py-1 outline-none border-b" id="lastname" name="lastname"
                                               type="text" placeholder="Doe">
                                    </div>
                                </div>
                                <div class="flex flex-col text-sm space-y-6">
                                    <label class="uppercase" for="email">Email<span class="text-red-600 text-lg ml-2">*</span></label>
                                    <input class="px-2 py-1 outline-none border-b" id="email" name="email"
                                           type="text" placeholder="johndoe@gmail.com">
                                </div>
                                <div class="flex flex-col text-sm space-y-6">
                                    <label class="uppercase" for="phonenumber">PHONE NUMBER<span class="text-red-600 text-lg ml-2">*</span></label>
                                    <input class="px-2 py-1 outline-none border-b" id="phonenumber" name="phonenumber"
                                           type="text" placeholder="+233 (059) 876 0879">
                                </div>
                                <div class="flex flex-col text-sm space-y-6">
                                    <label class="uppercase" for="phonenumber">Question or Comment<span class="text-red-600 text-lg ml-2">*</span></label>
                                    <textarea class="px-2 py-1 outline-none border-b " id="autoResize" id="phonenumber" name="phonenumber"
                                              placeholder="type your question here"></textarea>
                                </div>
                                <button class="flex text-lg border py-3 space-x-4 w-full justify-center rounded-[20px] bg-[#2B4BFE] text-white font-bold"
                                        type="submit">
                                    <span>Submit</span>
                                    <img class="w-[20px]" src="{{ asset('/assets/images/Frame 1171274988.svg') }}"
                                         alt="Arrow">
                                </button>

                            </div>
                        </form>
                    </div>
                    <div class="border py-8 px-8 xl:w-[40%] xl:min-h-[80vh] xl:border-none xl:mt-6 xl:mr-auto xl:pt-20 space-y-8">
                        <div>
                            <hr class="w-[15%] h-[2px] border-none bg-[#1A2D98]">
                            <h1 class="font-extrabold text-xl mt-4">PLEXUS MEDICAL CITY</h1>
                        </div>
                        <div class="flex flex-col xl:w-[60%] ml-8 space-y-6">
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
                            <div class="flex space-x-6 border-b pb-2 border-dashed">
                                <img class="w-[25px]"
                                     src="{{ asset('/assets/images/material-symbols_mail-outline.svg') }}"
                                     alt="Phone">
                                <div class="space-y-2 w-[200px]">
                                    <p class="font-bold text-black/80 text-sm">Email</p>
                                    <p class="text-xs">plexusmedicalcity@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-8">
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/ic_baseline-facebook1.svg') }}"
                                     alt="Facebook Icon">
                            </a>
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/prime_twitter2.svg') }}"
                                     alt="Twitter Icon">
                            </a>
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/mdi_instagram2.svg') }}"
                                     alt="Instagram Icon">
                            </a>
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/mdi_linkedin2.svg') }}"
                                     alt="LinkedIn Icon">
                            </a>
                            <a href="#">
                                <img class="w-[30px]" src="{{ asset('/assets/images/ic_baseline-whatsapp2.svg') }}"
                                     alt="whatsapp Icon">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="min-h-[120vh] bg-[#0F101A] py-16">
        <div class="md:max-w-[80%] mx-auto space-y-16">
            <h1 class="text-5xl text-center text-white">Frequently asked questions</h1>
            <div class="max-w-[80%] mx-auto space-y-10">
                <div class="flex space-x-4 md:space-x-8 text-white items-start ">
                    <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274989.svg') }}" alt="Icon">
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-extrabold ">What is the Vision and Mission of Plexus Medical City?
                            </h2>
                            <span>
                                <img src="{{ asset('/assets/images/mingcute_up-line.svg') }}" alt="Icon">
                            </span>
                            {{-- <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon"> --}}
                        </div>
                        <p class="text-white/80 leading-7">The vision for Plexus Medical City is to build a hospital in
                            Ghana that meets global standards,
                            becoming a model for Africa and the world.
                            The mission is to provide world-class surgical and medical care , train healthcare
                            professionals
                            through innovation, research, and excellence , and utilize modern, sustainable, and advanced
                            technology.</p>
                    </div>
                </div>

                <div class="flex space-x-4 md:space-x-8 text-white items-start ">
                    <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274991.svg') }}" alt="Icon">
                    <div class="space-y-2 w-full">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-extrabold ">What specialized medical services will the hospital
                                offer?
                            </h2>
                            <span>
                                {{-- <img src="{{ asset('/assets/images/mingcute_up-line.svg') }}" alt="Icon"> --}}
                                <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon">
                            </span>
                        </div>
                        <p class="text-white/80 leading-7 hidden">The vision for Plexus Medical City is to build a
                            hospital in
                            Ghana that meets global standards,
                            becoming a model for Africa and the world.
                            The mission is to provide world-class surgical and medical care , train healthcare
                            professionals
                            through innovation, research, and excellence , and utilize modern, sustainable, and advanced
                            technology.</p>
                    </div>
                </div>

                <div class="flex space-x-4 md:space-x-8 text-white items-start ">
                    <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274992.svg') }}" alt="Icon">
                    <div class="space-y-2 w-full">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-extrabold ">What is the expected global and regional impact of the
                                hospital?
                            </h2>
                            <span>
                                {{-- <img src="{{ asset('/assets/images/mingcute_up-line.svg') }}" alt="Icon"> --}}
                                <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon">
                            </span>
                        </div>
                        <p class="text-white/80 leading-7 hidden">The vision for Plexus Medical City is to build a
                            hospital in
                            Ghana that meets global standards,
                            becoming a model for Africa and the world.
                            The mission is to provide world-class surgical and medical care , train healthcare
                            professionals
                            through innovation, research, and excellence , and utilize modern, sustainable, and advanced
                            technology.</p>
                    </div>
                </div>

                <div class="flex space-x-4 md:space-x-8 text-white items-start ">
                    <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274993.svg') }}" alt="Icon">
                    <div class="space-y-2 w-full">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-extrabold ">How will Plexus Medical City develop and retain
                                world-class medical talent?
                            </h2>
                            <span>
                                {{-- <img src="{{ asset('/assets/images/mingcute_up-line.svg') }}" alt="Icon"> --}}
                                <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon">
                            </span>
                        </div>
                        <p class="text-white/80 leading-7 hidden">The vision for Plexus Medical City is to build a
                            hospital in
                            Ghana that meets global standards,
                            becoming a model for Africa and the world.
                            The mission is to provide world-class surgical and medical care , train healthcare
                            professionals
                            through innovation, research, and excellence , and utilize modern, sustainable, and advanced
                            technology.</p>
                    </div>
                </div>

                <div class="flex space-x-4 md:space-x-8 text-white items-start ">
                    <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274994.svg') }}" alt="Icon">
                    <div class="space-y-2 w-full">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-extrabold ">What steps will be taken to ensure global quality
                                standards and patient safety?
                            </h2>
                            <span>
                                {{-- <img src="{{ asset('/assets/images/mingcute_up-line.svg') }}" alt="Icon"> --}}
                                <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon">
                            </span>
                        </div>
                        <p class="text-white/80 leading-7 hidden">The vision for Plexus Medical City is to build a
                            hospital in
                            Ghana that meets global standards,
                            becoming a model for Africa and the world.
                            The mission is to provide world-class surgical and medical care , train healthcare
                            professionals
                            through innovation, research, and excellence , and utilize modern, sustainable, and advanced
                            technology.</p>
                    </div>
                </div>

                <div class="flex space-x-4 md:space-x-8 text-white items-start ">
                    <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274990.svg') }}" alt="Icon">
                    <div class="space-y-2 w-full">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-extrabold ">How will Plexus Medical City ensure long-term financial
                                stability and growth?
                            </h2>
                            <span>
                                {{-- <img src="{{ asset('/assets/images/mingcute_up-line.svg') }}" alt="Icon"> --}}
                                <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon">
                            </span>
                        </div>
                        <p class="text-white/80 leading-7 hidden">The vision for Plexus Medical City is to build a
                            hospital in
                            Ghana that meets global standards,
                            becoming a model for Africa and the world.
                            The mission is to provide world-class surgical and medical care , train healthcare
                            professionals
                            through innovation, research, and excellence , and utilize modern, sustainable, and advanced
                            technology.</p>
                    </div>
                </div>
                {{-- <div>
                    <div class="flex text-white md:space-x-8">
                        <img class="w-[50px]" src="{{ asset('/assets/images/Frame 1171274990.svg') }}" alt="Icon">
                        <div class="w-full">
                            <div class="flex justify-between w-full border ">
                                <h4>What specialized medical services will the hospital offer?</h4>
                                <img src="{{ asset('/assets/images/mingcute_up-line-1.svg') }}" alt="Icon">
                            </div>
                            <div id="content" class="hidden"></div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</x-main-layout>
<script>
    AOS.init({
        once:true
    })
    const textarea = document.getElementById("autoResize");

    textarea.addEventListener("input", function() {
        this.style.height = "auto"; // reset height
        this.style.height = this.scrollHeight + "px"; // set to intrinsic height
    });
</script>
