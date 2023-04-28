<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- IMPORT TAILWIND  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class='bg-gray-900'>
    <header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
        <!-- logo -->
        <a href="/" class="flex items-center ">
            <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">Primi passi</span>
        </a>
        <!-- navigation -->
        <nav class="nav font-semibold text-lg">
            <ul class="flex items-center">
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 border-opacity-100 text-green-500 duration-200 cursor-pointer active">
                    <a href="/">Home</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="/about">About</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/news">News</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/collections">Collections</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="relative pt-40 pb-20 lg:pt-44 dark:bg-gray-900">
        <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl dark:text-white">
                Questa è la schermata
                <br class="lg:block hidden">
                <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-300">
                    INIZIALE
                </span>.
            </h1>

            <div class="mt-12 md:mt-0 lg:absolute -right-10 lg:w-7/12">
                <div class="relative w-full">
                    <div aria-hidden="true" class="absolute scale-75 md:scale-110 inset-0 m-auto w-full h-full md:w-96 md:h-96 rounded-full rotate-45 bg-gradient-to-r from-sky-500 to-cyan-300 blur-3xl"></div>
                    <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/globalization-cuate.svg" class="relative w-full" alt="wath illustration" loading="lazy" width="320" height="280">
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>