<nav class="px-24 fixed w-full z-50">
    <div
        class="flex flex-wrap bg-white rounded-b-lg border border-white items-center justify-between px-5 bg-opacity-80">
        <a href="/" class="">
            <img src="{{ URL('images/bestfont.png') }}" class="w-20 sm:w-32" alt="Best Logo">
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
                <li>
                    <a href="/"
                        class=" {{ $active == 'Home' ? 'text-blue-800 font-bold' : 'font-medium' }} block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Home</a>
                </li>
                <li>
                    <a href="/about"
                        class="{{ $active == 'About' ? 'text-blue-800 font-bold' : 'font-medium' }} block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">About</a>
                </li>
                <li>
                    <a href="/services"
                        class="{{ $active == 'Services' ? 'text-blue-800 font-bold' : 'font-medium' }} block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Services</a>
                </li>
                <li>
                    <a href="/contact"
                        class="{{ $active == 'Contact' ? 'text-blue-800 font-bold' : 'font-medium' }} block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
