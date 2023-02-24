<nav class="relative px-4 py-6 flex justify-between items-center bg-yellow-400">
    <a class="text-3xl font-bold leading-none ml-2" href="#">
        <img src="{{ asset('img/logo_footer_black.png') }}" alt="" class="w-14 h-14">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-black-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="sm:text-sm md:text-md xl:text-lg text-gray-500 hover:text-gray-900"
                href="https://brainster.co/full-stack/">Академија за програмирање</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="sm:text-sm md:text-md xl:text-lg text-gray-500 hover:text-gray-900"
                href="https://brainster.co/marketing/">Академија за маркетинг</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="sm:text-sm md:text-md xl:text-lg text-gray-500 hover:text-gray-900"
                href="https://brainster.co/graphic-design/">Академија за дизајн</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="sm:text-sm md:text-md xl:text-xl text-gray-500 hover:text-gray-900"
                href="https://blog.brainster.co/">Блог</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li>
            {{-- <a class="sm:text-sm md:text-md xl:text-lg text-gray-400 hover:text-gray-500" href="#">Вработи наш
                студент</a> --}}
            <!-- Modal toggle -->
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-dark hover:text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-transparent  dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                type="button">
                Вработи наши студенти
            </button>
        </li>
    </ul>
   @yield('logInOut')
</nav>
<div class="navbar-menu relative z-40 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6  py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img src="{{ asset('img/logo_footer_black.png') }}" alt="" class="w-14 h-14">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm md:text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="https://brainster.co/full-stack/">Академија за програмирање</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm md:text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="https://brainster.co/marketing/">Академија за маркетинг</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm md:text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="https://brainster.co/graphic-design/">Академија за дизајн</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm md:text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="https://blog.brainster.co/">Блог</a>
                </li>
                <li class="mb-1">
                    {{-- <a class="block p-4 text-sm md:text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Вработи наш студент</a> --}}
                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="block text-dark hover:text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-transparent  dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                        type="button">
                        Вработи наши студенти
                    </button>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            @yield('logInOutBurger')
        </div>
    </nav>
</div>
