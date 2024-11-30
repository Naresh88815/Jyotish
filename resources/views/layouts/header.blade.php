<header class="header relative">
    <div class="upper-header py-2">
        <div class="container mx-auto flex items-center justify-between">
            <div class="logo flex items-center space-x-4">
                <img src="{{ asset('images/Jyotish-logo.png') }}" alt="Jyotish" class="h-20 w-20" />
                <img src="{{ asset('images/jyotish-text.png') }}" alt="Jyotish Text" class="h-12 w-auto" />
            </div>
        </div>
    </div>

    <div class="flex top-0 py-1 lg:py-2 w-full lg:relative z-50 dark:bg-gray-900" style="background-color: #5f43b2">
        <nav
            class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-5 py-2.5 lg:border-none lg:py-4 flex-grow">
            <div class="flex items-center justify-between">
                <div class="hidden lg:block">
                    <ul class="flex justify-center items-center space-x-4 text-base text-black/60 dark:text-white">
                        <li>
                            <button onclick="location.href='/home'" class="hover:bg-white rounded-md px-3 py-2.5">
                                <span class="iconify text-black w-5 h-5" data-icon="fa-solid:home" data-inline="false"></span>
                            </button>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2] no-underline">
                                ज्योतिष विशेष
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2] no-underline">
                                विवाह मिलान
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2] no-underline">
                                ग्रह मन्त्रहरु
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="#" class="flex items-center px-3 py-2.5 rounded-md hover:bg-white hover:text-[#5f43b2] no-underline">
                                राशिफल
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div
                                class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Sub-item 1</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Sub-item 2</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Sub-item 3</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-white rounded-md px-6 py-2.5 hover:text-[#5f43b2] no-underline">
                                वास्तु
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-white rounded-md px-6 py-2.5 hover:text-[#5f43b2] no-underline">
                                परामर्श
                            </a>
                        </li>
                    </ul>
                    
                </div>

                <div class="flex items-center lg:hidden ml-auto absolute right-0 top-1/2 transform -translate-y-1/2">
                    <button id="menu-btn" class="focus:outline-none text-slate-200 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                            aria-hidden="true"
                            class="text-2xl text-slate-800 dark:text-white focus:outline-none active:scale-110 active:text-red-500"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="hidden lg:flex lg:items-center gap-x-2" style="margin-right: 10%;">
            <button
                class="flex items-center rounded-md dark:text-white justify-center px-6 py-2.5 font-semibold border border-white"
                onclick="location.href='/register'">
                Sign up
            </button>
            <button
                class="flex items-center justify-center rounded-md bg-white text-[#5f43b2] px-6 py-2.5 font-semibold shadow-md hover:bg-blue-800"
                onclick="location.href='/login'">
                Login
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden lg:hidden absolute top-0 left-0 right-0 bg-[#5f43b2] shadow-lg">
        <ul class="flex flex-col text-black/60 dark:text-white">
            <li class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2]">
                <a href="/home" class="no-underline">
                    <span class="iconify text-black w-5 h-5" data-icon="fa-solid:home" data-inline="false"></span>
                </a>
            </li>
            <li class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2]">
                <a href="#" class="no-underline">
                    ज्योतिष विशेष
                </a>
            </li>
            <li class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2]">
                <a href="#" class="no-underline">
                    विवाह मिलान
                </a>
            </li>
            <li class="hover:bg-white rounded-md px-3 py-2.5 hover:text-[#5f43b2]">
                <a href="#" class="no-underline">
                    ग्रह मन्त्रहरु
                </a>
            </li>
            <li class="relative group">
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-md hover:bg-white hover:text-[#5f43b2] no-underline">
                    राशिफल
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </a>
                <div
                    class="hidden group-hover:block absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg">
                    <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Sub-item 1</a>
                    <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Sub-item 2</a>
                    <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Sub-item 3</a>
                </div>
            </li>
            <li class="hover:bg-white rounded-md px-6 py-2.5 hover:text-[#5f43b2]">
                <a href="#" class="no-underline">
                    वास्तु
                </a>
            </li>
            <li class="hover:bg-white rounded-md px-6 py-2.5 hover:text-[#5f43b2]">
                <a href="#" class="no-underline">
                    परामर्श
                </a>
            </li>
            <li class="hover:bg-white rounded-md px-6 py-2.5 hover:text-[#5f43b2]">
                <a href="/login" class="no-underline">
                    Login
                </a>
            </li>
            <li class="hover:bg-white rounded-md px-6 py-2.5 hover:text-[#5f43b2]">
                <a href="/register" class="no-underline">
                    Sign Up
                </a>
            </li>
        </ul>
    </div>
</header>
