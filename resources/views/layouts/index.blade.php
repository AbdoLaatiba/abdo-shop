<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdo-Shop - Shop The Best Products</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>

</head>

<body class="text-base leading-normal tracking-normal text-gray-600 bg-white work-sans">
    <!--Nav-->
    <nav id="header" class="top-0 z-30 w-full py-1">
        <div class="container flex flex-wrap items-center justify-between w-full px-6 py-3 mx-auto mt-0">

            <label for="menu-toggle" class="block cursor-pointer md:hidden">
                <svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="order-3 hidden w-full md:flex md:items-center md:w-auto md:order-1" id="menu">
                <nav>
                    <ul class="items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/shop">Shop</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/blog">Blog</a></li>
                        @guest
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="{{ route('register') }}">Register</a></li>
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="{{ route('login') }}">Login</a></li>
                        @endguest
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center text-xl font-bold tracking-wide text-gray-800 no-underline hover:no-underline "
                    href="/">
                    <svg class="mr-2 text-gray-800 fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    ABDOSHOP
                </a>
            </div>

            <div class="flex items-center order-2 md:order-3" id="nav-content">

                @auth
                    <a class="inline-block no-underline hover:text-black" href="{{ route('admin') }}">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path
                                d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>
                @endauth

                <a class="relative inline-block pl-3 no-underline hover:text-black" href="{{ route('cart.index') }}">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                    <span
                        class="absolute p-1 text-xs text-white bg-red-500 rounded-full -top-4 -right-3">{{ Cart::count() }}</span>
                </a>

            </div>
        </div>
    </nav>

    @yield('content')




    <footer class="text-gray-600 bg-gray-700 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 text-white bg-red-700 rounded-full"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <span class="ml-3 text-xl text-white">DEV</span>
                </a>
                <p class="mt-2 text-sm text-white">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 font-bold tracking-widest text-white title-font text-md">CATEGORIES</h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <a class="text-white hover:text-red-300" href="#">First Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Second Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Third Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 font-bold tracking-widest text-white title-font text-md">CATEGORIES</h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <a class="text-white hover:text-red-300" href="#">First Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Second Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Third Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 font-bold tracking-widest text-white title-font text-md">CATEGORIES</h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <a class="text-white hover:text-red-300" href="#">First Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Second Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Third Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 font-bold tracking-widest text-white title-font text-md">CATEGORIES</h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <a class="text-white hover:text-red-300" href="#">First Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Second Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Third Link</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-900">
            <div class="container flex flex-col flex-wrap px-5 py-4 mx-auto sm:flex-row">
                <p class="text-sm text-center text-white sm:text-left">© 2021 Dev —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="ml-1 text-gray-400"
                        target="_blank">@Abdelwahd_Laatiba</a>
                </p>
                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a class="text-gray-200">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-200">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-200">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-200">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>

</body>

</html>
