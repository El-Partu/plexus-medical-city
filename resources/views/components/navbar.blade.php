    <nav class="navbar  mx-auto py-8 fixed w-full left-0 z-10 top-0 ">
        <div class="lg:w-[1024px] flex justify-between items-center mx-auto">

            <span class="border">
                <a href="#">logo</a>
            </span>
            <div class="hidden md:flex w-[70%] justify-between items-center">
                <div class=" space-x-4 lg:w-[60%] flex justify-between">
                    <a class="{{ Request::is('/') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                       href="{{ route('home') }}">Home</a>
                    <a class="{{ Request::is('about-us') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                       href="{{ route('about-us') }}">About Us</a>
                    <a class="px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent"
                       href="#">Contact Us</a>
                </div>
                <div>
                    <a class="px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent"
                       href="#">Donate</a>
                </div>
            </div>
            <button class="md:hidden">
                Hamburger
            </button>

        </div>
    </nav>

    {{-- border-b border-white --}}
