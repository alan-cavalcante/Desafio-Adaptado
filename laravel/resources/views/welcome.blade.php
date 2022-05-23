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

<body>

    <header class="flex">
        <nav class="flex items-center justify-between w-full p-3">
            <div class="flex items-center min-w-max">
                <a href="/">
                    <img src="../img/logo.svg" class="object-contain" alt="logo">
                </a>
            </div>
            <!-- <ul class="flex items-center">
                <button class="m-4 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack "> Features
                    <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-1">
                </button>
                <button class="m-4 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack ">Company
                    <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-1">
                </button>
                <button class="m-4 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack ">Carreers</button>
                <button class="m-4 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack ">About</button>
            </ul> -->
            <div class="flex justify-between items-center" id="auth">
                <button class=" mx-1 font-projeto text-mediumgray hover:text-almostblack">Login</button>
                <button class=" mx-1 font-projeto text-mediumgray border border-mediumgray rounded-2xl py-2 px-4 hover:text-almostblack">Register</button>
            </div>
        </nav>
    </header>

    <main class="flex flex-col h-screen py-4">

        <div class="flex w-full">
            <img src="../img/image-hero-mobile.png" class=" object-contain " alt="image-hero">
        </div>

        <div class="flex flex-col items-center">

            <div class="flex flex-col w-full p-3 ">
                <div class="text-center">
                    <p class="text-center font-bold text-4xl my-3 font-projeto text-almostblack">Make remote work</p>
                    <p class="text-center text-md font-projeto text-mediumgray">Get your team in sync, no matter your location. Streamline processes, create team rituals, and watch productivity soar.</p>

                    <button class="rounded-2xl bg-almostblack mb-8 font-bold text-almostwhite p-3 w-32 mt-8">Learn more</button>
                </div>

                <div class="flex items-center justify-between w-full ">
                    <div>
                        <img class="p-3 object-contain" src="../img/client-databiz.svg" alt="databiz">
                    </div>
                    <div>
                        <img class="p-3 object-contain" src="../img/client-audiophile.svg" alt="audiophile">
                    </div>
                    <div>
                        <img class="p-3 object-contain" src="../img/client-meet.svg" alt="meet">
                    </div>
                    <div>
                        <img class="p-3 object-contain" src="../img/client-maker.svg" alt="maker">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <footer class="bg-slate-800 h-auto w-full">a</footer> -->
</body>

</html>