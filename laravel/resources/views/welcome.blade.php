<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&display=swap" rel="stylesheet">

    <link href="../css/app.css" rel="stylesheet">

    <title>Laravel</title>
</head>

<body class="text-center">
    <header class="flex justify-between px-10 py-4">
        <nav class="flex items-center content-start">
            <div class="flex items-center mr-10">
                <a href="/">
                    <img src="../img/logo.svg" alt="logo">
                </a>
            </div>
            <ul class="flex items-center">
                <button class="m-4 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack "> Features
                    <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-1">
                </button>
                <button class="m-4 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack ">Company
                    <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-1">
                </button>
                <button class="m-4 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack ">Carreers</button>
                <button class="m-4 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack ">About</button>
            </ul>
        </nav>
        <div class="flex items-center" id="auth">
            <button class=" font-projeto text-mediumgray p-4 hover:text-almostblack">Login</button>
            <button class=" font-projeto text-mediumgray border border-mediumgray rounded-2xl py-2 px-4 m-4 hover:text-almostblack">Register</button>
        </div>
    </header>
    <main class="flex items-center px-36 py-12 justify-between">
        <div class="flex flex-col p-2 justify-start bg-red-200 ">
            <p class="text-left font-bold text-6xl font-projeto text-almostblack">Make remote work</p>
            <p class=" text-left text-lg font-projeto text-mediumgray ">Get your team in sync, no matter your location.</p>
            <p class=" text-left text-lg font-projeto text-mediumgray ">Streamline processes, create team rituals, and watch productivity soar.</p>
            
            <button class="rounded-xl bg-almostblack text-almostwhite py-2 w-52 mt-8">Learn more</button>
            
            <div class="flex items-center justify-between">
                <img class="mx-2" src="../img/client-databiz.svg" alt="databiz">
                <img class="mx-2" src="../img/client-audiophile.svg" alt="audiophile">
                <img class="mx-2" src="../img/client-meet.svg" alt="meet">
                <img class="mx-2" src="../img/client-maker.svg" alt="maker">
            </div>
        </div>
        <div class="p-2">
            <img src="../img/image-hero-desktop.png" alt="image-hero">
        </div>
    </main>
</body>

</html>