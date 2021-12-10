<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex">
            <x-logo class="w-auto h-10 mx-auto" />
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">REPY</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            @auth
            <li>
                <a href="/" class="block py-2 pl-3 pr-4 text-white bg-yellow-700 rounded md:bg-transparent md:text-yellow-700 md:p-0 dark:text-white" aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{ route('banks.index') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Banques</a>
            </li>
            <li>
                <a href="{{ route('users.index') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Utilisateurs</a>
            </li>
            <li>
                <a href="{{ route('reports.index') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Bulletins</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Analyses</a>
            </li>
            @endauth
            <li>
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline"
                            >
                                Log out
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </li>
        </ul>
        </div>
    </div>
</nav>
