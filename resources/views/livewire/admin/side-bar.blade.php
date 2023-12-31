<div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:flex">
    <div class="flex flex-col h-full mt-0 sm:mt-4 sm:ml-3">
        <!-- Navigation Rail -->
        <div class="relative h-screen lg:block w-64 pb-3 ">
            <div class="h-full bg-white rounded-2xl dark:bg-gray-700 py-2">
                <nav class="mt-5">
                    <div>
                        <a href="{{ route('dashboard') }}" aria-label="Ir para homepage"
                            class="flex items-center justify-start w-full px-4 py-2 my-1
                        font-thin uppercase transition-colors duration-200
                        {{ Request::is('*dashboard')
                            ? ' bg-gradient-to-r from-white to-blue-100
                                                                                                                        dark:from-gray-700 dark:to-gray-200 text-blue-500 border-r-4 border-blue-500'
                            : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}">
                            <span class="text-left">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 2048 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                Dashboard
                            </span>
                        </a>
                        <!-- Dropdown Article -->
                        <button id="dropdownArticle" data-dropdown-toggle="dropdown"
                            class="flex items-center justify-start w-full px-4 py-2
                                font-thin uppercase transition-colors duration-200
                                {{ Request::is('*artigos*')
                                    ? ' bg-gradient-to-r from-white to-blue-100
                                                                                                                                            dark:from-gray-700 dark:to-gray-200 text-blue-500 border-r-4 border-blue-500'
                                    : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}"
                            type="button">
                            <span class="text-left">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xml:space="preserve">
                                    <g id="article">
                                        <g>
                                            <path
                                                d="M20.5,22H4c-0.2,0-0.3,0-0.5,0C1.6,22,0,20.4,0,18.5V6h5V2h19v16.5C24,20.4,22.4,22,20.5,22z M6.7,20h13.8
                                                c0.8,0,1.5-0.7,1.5-1.5V4H7v14.5C7,19,6.9,19.5,6.7,20z M2,8v10.5C2,19.3,2.7,20,3.5,20S5,19.3,5,18.5V8H2z" />
                                        </g>
                                        <g>
                                            <rect x="15" y="6" width="5" height="6" />
                                        </g>
                                        <g>
                                            <rect x="9" y="6" width="4" height="2" />
                                        </g>
                                        <g>
                                            <rect x="9" y="10" width="4" height="2" />
                                        </g>
                                        <g>
                                            <rect x="9" y="14" width="11" height="2" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                Artigos
                            </span>
                            <svg class="w-2.5 h-2.5 ml-5 justify-end" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdown"
                            class="justify-start w-full z-10 hidden bg-white
                                divide-gray-100 rounded-es-lg shadow dark:bg-gray-700 ">
                            <ul class="text-sm ml-5 -mt-2 rounded-ee-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownArticle">
                                <li
                                    class="font-thin uppercase transition-colors duration-200
                                {{ Request::is('artigos*')
                                    ? ' bg-gradient-to-r from-white to-blue-100
                                                                                                                                            dark:from-gray-700 dark:to-gray-200 text-blue-500 border-r-4 border-blue-500'
                                    : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}">
                                    <a href="{{ route('articles') }}" aria-label="Ir para artigos"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600
                                        dark:hover:text-white">
                                        <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                fill="currentColor" />
                                            <path fill="#292D32"
                                                d="M10.7397 16.2802C10.5497 16.2802 10.3597 16.2102 10.2097 16.0602C9.91969 15.7702 9.91969 15.2902 10.2097 15.0002L13.2097 12.0002L10.2097 9.00016C9.91969 8.71016 9.91969 8.23016 10.2097 7.94016C10.4997 7.65016 10.9797 7.65016 11.2697 7.94016L14.7997 11.4702C15.0897 11.7602 15.0897 12.2402 14.7997 12.5302L11.2697 16.0602C11.1197 16.2102 10.9297 16.2802 10.7397 16.2802Z" />
                                        </svg>
                                        Artigos
                                    </a>
                                </li>
                                <li
                                    class="font-thin uppercase transition-colors duration-200
                                {{ Request::is('categorias-de-artigos')
                                    ? ' bg-gradient-to-r from-white to-blue-100
                                                                                                                                            dark:from-gray-700 dark:to-gray-200 text-blue-500 border-r-4 border-blue-500'
                                    : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}">
                                    <a href="{{ route('category-articles') }}" aria-label="Ir para artigos"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600
                                    dark:hover:text-white">
                                        <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                fill="currentColor" />
                                            <path fill="#292D32"
                                                d="M10.7397 16.2802C10.5497 16.2802 10.3597 16.2102 10.2097 16.0602C9.91969 15.7702 9.91969 15.2902 10.2097 15.0002L13.2097 12.0002L10.2097 9.00016C9.91969 8.71016 9.91969 8.23016 10.2097 7.94016C10.4997 7.65016 10.9797 7.65016 11.2697 7.94016L14.7997 11.4702C15.0897 11.7602 15.0897 12.2402 14.7997 12.5302L11.2697 16.0602C11.1197 16.2102 10.9297 16.2802 10.7397 16.2802Z" />
                                        </svg>
                                        Categorias
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Dropdown Article -->
                        @if (Auth::user()->group->level <= 10)
                            <div class="divider"></div>
                            <a href="{{ route('list-users') }}" aria-label="Ir para homepage"
                                class="flex items-center justify-start w-full px-4 py-2 my-1
                                font-thin uppercase transition-colors duration-200
                                {{ Request::is('*usuários')
                                    ? ' bg-gradient-to-r from-white to-blue-100
                                                                                                                                                                dark:from-gray-700 dark:to-gray-200 text-blue-500 border-r-4 border-blue-500'
                                    : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}">
                                <span class="text-left">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Usuários
                                </span>
                            </a>
                            <a href="{{ route('configuration') }}"
                                class="flex items-center justify-start w-full px-4 py-2 my-1
                                font-thin uppercase transition-colors duration-200
                                {{ Request::is('*configurações*')
                                    ? 'bg-gradient-to-r from-white to-blue-100
                                                                                                                                                                dark:from-gray-700 dark:to-gray-800 text-blue-500 border-r-4 border-blue-500'
                                    : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}">
                                <span class="text-left">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1 3.5A1.5 1.5 0 012.5 2h15A1.5 1.5 0 0119 3.5v2A1.5 1.5 0 0117.5 7h-15A1.5 1.5 0 011 5.5v-2zm3.5 1a1 1 0 11-2 0 1 1 0 012 0zM1 9.5A1.5 1.5 0 012.5 8h6.073a1.5 1.5 0 011.342 2.17l-1 2a1.5 1.5 0 01-1.342.83H2.5A1.5 1.5 0 011 11.5v-2zm3.5 1a1 1 0 11-2 0 1 1 0 012 0zM1 15.5A1.5 1.5 0 012.5 14h5.27a1.5 1.5 0 011.471 1.206l.4 2A1.5 1.5 0 018.171 19H2.5A1.5 1.5 0 011 17.5v-2zm3.5 1a1 1 0 11-2 0 1 1 0 012 0zM12.159 13.059l-.682-.429a.987.987 0 01-.452-.611.946.946 0 01.134-.742.983.983 0 01.639-.425 1.023 1.023 0 01.758.15l.682.427c.369-.31.8-.54 1.267-.676V9.97c0-.258.104-.504.291-.686.187-.182.44-.284.704-.284.264 0 .517.102.704.284a.957.957 0 01.291.686v.783c.472.138.903.37 1.267.676l.682-.429a1.02 1.02 0 01.735-.107c.25.058.467.208.606.419.14.21.19.465.141.71a.97.97 0 01-.403.608l-.682.429a3.296 3.296 0 010 1.882l.682.43a.987.987 0 01.452.611.946.946 0 01-.134.742.982.982 0 01-.639.425 1.02 1.02 0 01-.758-.15l-.682-.428c-.369.31-.8.54-1.267.676v.783a.957.957 0 01-.291.686A1.01 1.01 0 0115.5 19a1.01 1.01 0 01-.704-.284.957.957 0 01-.291-.686v-.783a3.503 3.503 0 01-1.267-.676l-.682.429a1.02 1.02 0 01-.75.132.999.999 0 01-.627-.421.949.949 0 01-.135-.73.97.97 0 01.434-.61l.68-.43a3.296 3.296 0 010-1.882zm3.341-.507c-.82 0-1.487.65-1.487 1.449s.667 1.448 1.487 1.448c.82 0 1.487-.65 1.487-1.448 0-.8-.667-1.45-1.487-1.45z" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Configurações
                                </span>
                            </a>
                            <a href="{{ route('social-media') }}"
                                class="flex items-center justify-start w-full px-4 py-2 my-1
                                font-thin uppercase transition-colors duration-200
                                {{ Request::is('*mídias*')
                                    ? 'bg-gradient-to-r from-white to-blue-100
                                                                                                                                                                dark:from-gray-700 dark:to-gray-800 text-blue-500 border-r-4 border-blue-500'
                                    : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}">
                                <span class="text-left">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="-1 0 26 26" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                                        <title>share</title>
                                        <desc>Created with Sketch Beta.</desc>
                                        <defs>

                                        </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Icon-Set" sketch:type="MSLayerGroup"
                                                transform="translate(-312.000000, -726.000000)" fill="currentColor">
                                                <path
                                                    d="M331,750 C329.343,750 328,748.657 328,747 C328,745.343 329.343,744 331,744 C332.657,744 334,745.343 334,747 C334,748.657 332.657,750 331,750 L331,750 Z M317,742 C315.343,742 314,740.657 314,739 C314,737.344 315.343,736 317,736 C318.657,736 320,737.344 320,739 C320,740.657 318.657,742 317,742 L317,742 Z M331,728 C332.657,728 334,729.343 334,731 C334,732.657 332.657,734 331,734 C329.343,734 328,732.657 328,731 C328,729.343 329.343,728 331,728 L331,728 Z M331,742 C329.23,742 327.685,742.925 326.796,744.312 L321.441,741.252 C321.787,740.572 322,739.814 322,739 C322,738.497 321.903,738.021 321.765,737.563 L327.336,734.38 C328.249,735.37 329.547,736 331,736 C333.762,736 336,733.762 336,731 C336,728.238 333.762,726 331,726 C328.238,726 326,728.238 326,731 C326,731.503 326.097,731.979 326.235,732.438 L320.664,735.62 C319.751,734.631 318.453,734 317,734 C314.238,734 312,736.238 312,739 C312,741.762 314.238,744 317,744 C318.14,744 319.179,743.604 320.02,742.962 L320,743 L326.055,746.46 C326.035,746.64 326,746.814 326,747 C326,749.762 328.238,752 331,752 C333.762,752 336,749.762 336,747 C336,744.238 333.762,742 331,742 L331,742 Z"
                                                    id="share" sketch:type="MSShapeGroup">

                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Mídias sociais
                                </span>
                            </a>
                        @endif

                        <a href="{{ url('/user/profile') }}"
                            class="flex items-center justify-start w-full px-4 py-2 my-1
                        font-thin uppercase transition-colors duration-200
                        {{ Request::is('*profile*')
                            ? 'bg-gradient-to-r from-white to-blue-100
                                                                                                                        dark:from-gray-700 dark:to-gray-800 text-blue-500 border-r-4 border-blue-500'
                            : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }} sm:hidden">
                            <span class="text-left">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M1 3.5A1.5 1.5 0 012.5 2h15A1.5 1.5 0 0119 3.5v2A1.5 1.5 0 0117.5 7h-15A1.5 1.5 0 011 5.5v-2zm3.5 1a1 1 0 11-2 0 1 1 0 012 0zM1 9.5A1.5 1.5 0 012.5 8h6.073a1.5 1.5 0 011.342 2.17l-1 2a1.5 1.5 0 01-1.342.83H2.5A1.5 1.5 0 011 11.5v-2zm3.5 1a1 1 0 11-2 0 1 1 0 012 0zM1 15.5A1.5 1.5 0 012.5 14h5.27a1.5 1.5 0 011.471 1.206l.4 2A1.5 1.5 0 018.171 19H2.5A1.5 1.5 0 011 17.5v-2zm3.5 1a1 1 0 11-2 0 1 1 0 012 0zM12.159 13.059l-.682-.429a.987.987 0 01-.452-.611.946.946 0 01.134-.742.983.983 0 01.639-.425 1.023 1.023 0 01.758.15l.682.427c.369-.31.8-.54 1.267-.676V9.97c0-.258.104-.504.291-.686.187-.182.44-.284.704-.284.264 0 .517.102.704.284a.957.957 0 01.291.686v.783c.472.138.903.37 1.267.676l.682-.429a1.02 1.02 0 01.735-.107c.25.058.467.208.606.419.14.21.19.465.141.71a.97.97 0 01-.403.608l-.682.429a3.296 3.296 0 010 1.882l.682.43a.987.987 0 01.452.611.946.946 0 01-.134.742.982.982 0 01-.639.425 1.02 1.02 0 01-.758-.15l-.682-.428c-.369.31-.8.54-1.267.676v.783a.957.957 0 01-.291.686A1.01 1.01 0 0115.5 19a1.01 1.01 0 01-.704-.284.957.957 0 01-.291-.686v-.783a3.503 3.503 0 01-1.267-.676l-.682.429a1.02 1.02 0 01-.75.132.999.999 0 01-.627-.421.949.949 0 01-.135-.73.97.97 0 01.434-.61l.68-.43a3.296 3.296 0 010-1.882zm3.341-.507c-.82 0-1.487.65-1.487 1.449s.667 1.448 1.487 1.448c.82 0 1.487-.65 1.487-1.448 0-.8-.667-1.45-1.487-1.45z" />
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                Perfil
                            </span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}"
                                class="flex items-center justify-start w-full px-4 py-2 my-1
                            font-thin uppercase transition-colors duration-200
                            {{ Request::is('profile*')
                                ? 'bg-gradient-to-r from-white to-blue-100
                                                                                                                                            dark:from-gray-700 dark:to-gray-800 text-blue-500 border-r-4 border-blue-500'
                                : 'dark:text-gray-200 hover:text-blue-500 text-gray-500' }}
                            sm:hidden">
                                <span class="text-left">
                                    <svg class="w-6 h-6 " viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 7.63636L14 4.5C14 4.22386 13.7761 4 13.5 4L4.5 4C4.22386 4 4 4.22386 4 4.5L4 19.5C4 19.7761 4.22386 20 4.5 20L13.5 20C13.7761 20 14 19.7761 14 19.5L14 16.3636"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 12L21 12M21 12L18.0004 8.5M21 12L18 15.5" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    {{ __('Log Out') }}
                                </span>
                            </a>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>
