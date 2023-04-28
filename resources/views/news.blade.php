<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About</title>

    <!-- IMPORT TAILWIND  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
        <!-- logo -->
        <a href="/" class="flex items-center ">
            <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">Primi passi</span>
        </a>
        <!-- navigation -->
        <nav class="nav font-semibold text-lg">
            <ul class="flex items-center">
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="/">Home</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="/about">About</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 border-opacity-100 text-green-500 duration-200 cursor-pointer">
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
</body>

</html>