<div class="container mx-auto header-1 flex flex-col bg-transparent">
    <nav class=" px-4 py-2 flex flex-col md:flex-row md:items-center flex-shrink-0">
        <div class="flex justify-between items-center">
            <a class="flex items-center py-4 px-2" href="{{route('home')}}">
                <img src="{{asset('imgs/logo.png')}}" alt="Logo" class="h-16 mt-3">
            </a>
            <button class="px-2 py-1 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                <svg class=" w-6 h-6 text-secondary hover:text-secondary-dark " x-show="!showMenu" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        {{-- Desktop and Mobile Menu --}}

        <div class="hidden md:flex flex-grow" id="navbar-collapse">
            <ul class="flex flex-col mt-3 mb-1 md:flex-row md:items-center md:mx-auto md:mt-0 md:mb-0">
                <li>
                    <a href="{{route('home')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">Home</a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">About</a>
                </li>
                <li>
                    <a href="{{route('services')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">Services</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">Contact</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row  md:items-center my-3 mx-3 lg:my-0 md:space-x-1 space-y-2 md:space-y-0 ">
                <a href="{{route('reviews')}}" class="btn-primary">
                    Reviews
                </a>
                <a href="{{route('order')}}" class="btn-primary-outline break-normal">
                    Order Now
                </a>
            </div>
        </div>
    </nav>

</div>
