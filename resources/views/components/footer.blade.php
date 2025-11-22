<footer class="min-h-[150vh] md:min-h-screen flex flex-col justify-end">
    <div>
        <div class="bg-[#1A2D98] pt-70 min-h-[65vh] relative md:pt-60 pb-10">
            <div
                 class="flex w-full flex-col md:flex-row min-h-[40vh] justify-between lg:w-[1000px] bg-[#2038BF] absolute -top-1/3 left-1/2 -translate-x-1/2  px-10 rounded-[20px] py-10 ">
                <div class="-translate-y-24"><img class="md:w-[25rem]"
                         src="{{ asset('assets/images/WhatsApp_Image_2025-10-30_at_10.08.42-removebg-preview 1.svg') }}"
                         alt="Plexus Hospital"></div>
                <div class="w-full md:w-[25rem] space-y-6">
                    <p class="font-bold text-white/80">Subscribe to our newsletter to get updates to our latest
                        facilities and benefits</p>
                    <div class="relative rounded-[50px]">
                        <img class="absolute w-[30px] left-3 bottom-2"
                             src="{{ asset('/assets/images/material-symbols_mail-outline.svg') }}" alt="Email icon">
                        <input class="bg-white/20 text-white w-full text-sm outline-none py-3 pl-14 rounded-[50px] border"
                               id="email" name="email" type="email" placeholder="Enter email address">
                        <button class="absolute right-0 bg-white px-6 h-full rounded-[50px]">Subscribe</button>
                    </div>
                    <p class="text-sm text-white">Subscribe to our newsletter to get updates to our latest
                        facilities and benefits</p>
                </div>
            </div>

            <div
                 class="lg:w-[1000px] space-y-8 mx-auto flex flex-col items-center  md:flex-row md:justify-between md:items-start md:px-10 lg:px-0">
                <div class="md:w-[40%] space-y-4 px-6 md:px-0">
                    <h4 class="text-center text-white text-lg font-extrabold">PLEXUS MEDICAL CITY</h4>
                    <div class="space-y-10">
                        <p class="text-white/90">To build a hospital in Ghana that meets global standards,
                            becoming a model for Africa and
                            the world.</p>
                        <div class="flex space-x-8">
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/ic_baseline-facebook.svg') }}"
                                     alt="Facebook Icon">
                            </a>
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/prime_twitter.svg') }}"
                                     alt="Twitter Icon">
                            </a>
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/mdi_instagram.svg') }}"
                                     alt="Instagram Icon">
                            </a>
                            <a href="#">
                                <img class=" w-[30px]" src="{{ asset('/assets/images/mdi_linkedin.svg') }}"
                                     alt="LinkedIn Icon">
                            </a>
                            <a href="#">
                                <img class="w-[30px]" src="{{ asset('/assets/images/ic_baseline-whatsapp.svg') }}"
                                     alt="whatsapp Icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="text-white text-lg font-extrabold text-center md:text-left">Quick Links</h4>
                    <div class="flex flex-col text-center md:text-left text-white/90 space-y-2">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('about-us') }}">About Us</a>
                        <a href="{{ route('contact-us') }}">Contact Us</a>
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="text-white text-lg font-extrabold text-center md:text-left">Support</h4>
                    <div class="flex flex-col text-center md:text-left text-white/90 space-y-2">
                        <a href="#">Help Center</a>
                        <a href="#">Tweet @ Us</a>
                        <a href="#">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center lg:w-[1000px] mx-auto text-xs min-h-[5vh] px-6 md:px-0 pt-4 space-y-4">
            <div class="flex items-center space-x-1">
                <img class="w-[15px]" src="{{ asset('/assets/images/ic_baseline-copyright.svg') }}"
                     alt="copy right icon">
                <p>Copyright by PLEXUS. All rights reserved</p>
            </div>
            <div class="grid grid-cols-2 gap-2 md:w-[50%] md:flex justify-between">
                <span>Privacy Policy</span>
                <span>Terms of Use</span>
                <span>Legal</span>
                <span>Site Map</span>
            </div>
        </div>
    </div>
</footer>
