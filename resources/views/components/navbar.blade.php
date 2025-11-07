    <nav class="navbar flex justify-between items-center md:max-w-[1024px] mx-auto py-8 fixed w-full md:left-[221px] z-10 top-0 ">

        <span class="border">
            <a href="#">logo</a>
        </span>
        <div class="hidden md:flex w-[65%] justify-between items-center">
            <div class="w-[60%] flex justify-between">
                <a class="{{ Request::is('/') ? 'px-6 py-1 rounded-[20px] bg-white text-black' : 'px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent' }} "
                   href="{{ route('home') }}">Home</a>
                <a class="px-6 py-1 rounded-[20px] border border-white backdrop-blur-lg text-white hover:bg-white hover:text-black transition-colors bg-transparent"
                   href="#">About Us</a>
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
    </nav>

    {{-- border-b border-white --}}
