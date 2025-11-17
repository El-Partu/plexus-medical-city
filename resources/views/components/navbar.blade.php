    <nav class="mx-auto py-6 md:py-6 fixed w-full left-0 z-10 top-0" id="navbar">
        <div class=" px-4 lg:w-[1024px] flex justify-between items-center mx-auto">

            <span class="border">
                <a href="#">logo</a>
            </span>
            <div class="hidden md:flex w-[70%] justify-between items-center">
                <div class=" space-x-4 lg:w-[60%] flex justify-between">
                    <a class="{{ Request::is('/') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border-b border-black/90  backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                       href="{{ route('home') }}">Home</a>
                    <a class="{{ Request::is('about-us') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border-b border-black/90 backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                       href="{{ route('about-us') }}">About Us</a>
                    <a class="{{ Request::is('contact-us') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border-b border-black/90 backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                       href="{{ route('contact-us') }}">Contact Us</a>
                </div>
                <div>
                    <a class="px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent"
                       href="#">Donate</a>
                </div>
            </div>
            <button class="md:hidden" id="menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="absolute top-0 left-0 w-full bg-white h-screen z-50 hidden" id="mobile-view--navbar">
                <div>
                    {{-- <img src="{{ asset('/assets/images') }}" alt=""> --}}
                    <ul>
                        <li>
                            <a class="{{ Request::is('/') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                               href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('about-us') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                               href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('contact-us') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                               href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('/') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                               href="{{ route('home') }}">Donate</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </nav>

    <script>
        const menu = document.getElementById('menu')
        const mobileNavbar = document.getElementById('mobile-view--navbar')
        
        menu.addEventListener('click', function() {
            mobileNavbar.classList.remove("hidden")
        })
        
        document.addEventListener('scroll', function(){
            const navbar = document.getElementById('navbar')
            if(window.scrollY > 60){
                navbar.classList.add('bg-[#192A55]')
            }else{
                navbar.classList.remove('bg-[#192A55]')
            }
        })

    </script>
