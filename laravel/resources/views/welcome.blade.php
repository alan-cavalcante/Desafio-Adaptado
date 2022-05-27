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

    <script>
        function abrirHamburger() {
            let x = document.getElementById("linksNav")
            for (let i = 0; i <= x.classList.length; i++) {
                if (x.classList[i] == "hidden") {
                    x.classList.remove("hidden")
                    x.classList.add("flex")
                    
                } else if (x.classList[i] == "flex")  {
                    x.classList.remove("flex")
                    x.classList.add("hidden")
                }
            }
        }
    </script>
</head>

<body>

    <header class="flex">
        <nav class="flex justify-between w-full p-3">
            <div class="flex items-center min-w-max m-2 sm:mx-4">
                <a href="/">
                    <img src="../img/logo.svg" class="object-contain" alt="logo">
                </a>
            </div>
            
            <svg xmlns="http://www.w3.org/2000/svg" onclick="abrirHamburger()" class="h-6 w-6 z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            
            <div class=" bg-white absolute right-0 top-0 flex-col h-full p-4 w-2/3 items-end hidden" id="linksNav">

                <ul class="self-start flex flex-col">
                    <button class="m-1 my-3 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack "> Features
                        <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-4">
                    </button>
                    <button class="m-1 my-3 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack ">Company
                        <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-4">
                    </button>
                    <button class="m-1 my-3 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack ">Carreers</button>
                    <button class="m-1 my-3 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack ">About</button>
                </ul>

                <div class=" flex flex-col w-full p-8" id="auth">
                    <button class="font-projeto text-mediumgray text-sm hover:text-almostblack">Login</button>
                    <button class="font-projeto text-mediumgray border border-mediumgray rounded-xl py-2 px-4 mt-4 text-sm hover:text-almostblack">Register</button>
                </div>
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
                    <p class="text-center font-bold text-4xl my-4 font-projeto text-almostblack">Make remote work</p>
                    <p class="text-center text-md font-projeto text-mediumgray">Get your team in sync, no matter your location. Streamline processes, create team rituals, and watch productivity soar.</p>

                    <button class="rounded-2xl border bg-almostblack mb-8 font-bold text-almostwhite p-3 w-32 mt-8
                    hover:bg-almostwhite hover:text-almostblack hover:border hover:border-almostblack">Learn more</button>
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