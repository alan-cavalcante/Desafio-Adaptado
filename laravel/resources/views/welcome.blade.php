<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" m-0 p-0 min-w-full w-full max-w-full min-h-full h-full max-h-full ">

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
            x.classList.toggle('hidden');
        }

        function abrirFeatures() {
            let y = document.getElementById("features")
            let yy = document.getElementById("setaFeatures")
            let down = "../img/icon-arrow-down.svg"
            let up = "../img/icon-arrow-up.svg"
            if (yy.attributes[0].value == down) {
                yy.attributes[0].value = up
            } else if (yy.attributes[0].value == up) {
                yy.attributes[0].value = down
            }
            y.classList.toggle('hidden')
        }

        function abrirCompany() {
            let z = document.getElementById("company")
            let zz = document.getElementById("setaCompany")
            let down = "../img/icon-arrow-down.svg"
            let up = "../img/icon-arrow-up.svg"
            if (zz.attributes[0].value == down) {
                zz.attributes[0].value = up
            } else if (zz.attributes[0].value == up) {
                zz.attributes[0].value = down
            }

            z.classList.toggle('hidden')
        }
    </script>
</head>

<body class=" m-0 p-0 min-w-full w-full max-w-full min-h-full h-full max-h-full ">
    <!-- HEADER NAV & LOGIN -->
    <header class="flex">
        <nav class="flex justify-between w-full p-3">
            <!-- LOGO  -->
            <div class="flex items-center min-w-max m-2 sm:mx-4 md:mr-16">
                <a href="/">
                    <img src="../img/logo.svg" class="object-contain" alt="logo">
                </a>
            </div>
            <!-- BOTÃO ABRIR MENU - MOBILE -->
            <svg xmlns="http://www.w3.org/2000/svg" onclick="abrirHamburger()" class="h-6 w-6 z-10 md:hidden " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <!-- NAVEGAÇÃO -->
            <div class="bg-white absolute right-0 top-0 flex-col h-full p-4 w-2/3 items-end drop-shadow-[0_22px_70px_rgba(0,0,0,0.56)] hidden 
             md:static md:flex md:flex-row md:p-2 md:w-full md:items-center md:justify-between md:filter-none " id="linksNav">

                <ul class="flex flex-col mt-10 md:flex-row md:mt-0 ">
                    <button class="m-1 my-3 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack md:ml-4" onclick="abrirFeatures()"> Features
                        <img src="../img/icon-arrow-down.svg" alt="arrow" class="ml-4 md:ml-2" id="setaFeatures">
                    </button>

                    <!-- JANELA FEATURES -->
                    <div id="features" class="hidden bg-almostwhite 
                    md:absolute md:top-20 md:left-36 md:rounded-lg md:bg-white md:drop-shadow-2xl md:p-2 md:border-2 md:border-almostwhite ">

                        <button class="m-1 my-3 pl-2 flex items-baseline font-projeto text-mediumgray hover:text-almostblack
                        md:mx-2 md:pl-0 md:my-3 text-left ">
                            <div class=" w-8 flex flex-col items-center justify-center">
                                <img src="../img/icon-todo.svg" class=" mx-2" alt="todo list" class="ml-4">
                            </div>
                            <p>Todo List</p>
                        </button>

                        <button class="m-1 my-3 pl-2 flex items-baseline font-projeto text-mediumgray hover:text-almostblack
                        md:mx-2 md:pl-0 md:my-3 text-left ">
                            <div class=" w-8 flex flex-col items-center justify-center">
                                <img src="../img/icon-calendar.svg" class=" mx-2" alt="calendar" class="ml-4">
                            </div>
                            <p>Calendar</p>
                        </button>

                        <button class="m-1 my-3 pl-2 flex items-baseline font-projeto text-mediumgray hover:text-almostblack
                        md:mx-2 md:pl-0 md:my-3 text-left ">
                            <div class=" w-8 flex flex-col items-center justify-center">
                                <img src="../img/icon-reminders.svg" class=" mx-2" alt="reminders" class="ml-4">
                            </div>
                            <p>Reminders</p>
                        </button>

                        <button class="m-1 my-3 pl-2 flex items-baseline font-projeto text-mediumgray hover:text-almostblack
                        md:mx-2 md:pl-0 md:my-3 text-left ">
                            <div class=" w-8 flex flex-col items-center justify-center">
                                <img src="../img/icon-planning.svg" class=" mx-2" alt="planning" class="ml-4">
                            </div>
                            <p>Planning</p>
                        </button>
                    </div>

                    <button class="m-1 my-3 flex items-baseline font-projeto font-bold text-mediumgray hover:text-almostblack md:ml-4" onclick="abrirCompany()">Company
                        <img src="../img/icon-arrow-down.svg" alt="arrow" id="setaCompany" class="ml-4 md:ml-2">
                    </button>

                    <!-- JANELA COMPANY -->
                    <div id="company" class="hidden bg-almostwhite
                    md:absolute md:top-20 md:left-80 md:rounded-lg md:bg-white md:drop-shadow-2xl md:p-2 md:border-2 md:border-almostwhite">
                        <button class=" pl-2 m-1 my-3 ml-2 flex items-start font-projeto text-mediumgray hover:text-almostblack 
                        md:mx-4 md:pl-0 md:my-3 text-left ">
                            History
                        </button>
                        <button class=" pl-2 m-1 my-3 ml-2 flex items-start font-projeto text-mediumgray hover:text-almostblack
                        md:mx-4 md:pl-0 md:my-3 text-left ">
                            Our Team
                        </button>
                        <button class=" pl-2 m-1 my-3 ml-2 flex items-start font-projeto text-mediumgray hover:text-almostblack
                        md:mx-4 md:pl-0 md:my-3 text-left ">
                            Blog
                        </button>
                    </div>

                    <button class="m-1 my-3 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack md:ml-4 ">Carreers</button>
                    <button class="m-1 my-3 flex items-center font-projeto font-bold text-mediumgray hover:text-almostblack md:ml-4 ">About</button>
                </ul>

                <!-- REGISTRO E LOGIN -->
                <div class=" flex flex-col w-full p-8 md:flex-row 
                md:w-max md:p-2 " id="auth">
                    <button class="font-projeto text-mediumgray text-sm hover:text-almostblack">Login</button>
                    <button class="font-projeto text-mediumgray border border-mediumgray rounded-xl py-2 px-4 mt-4 text-sm hover:text-almostblack
                    md:ml-4 md:my-2">Register</button>
                </div>
            </div>
        </nav>
    </header>
    <!-- / HEADER NAV & LOGIN -->

    <main class="flex flex-col w-full h-auto
    md:flex-row-reverse md:px-44 md:items-center md:justify-center">
        <!-- IMAGE -->
        <div class="flex md:w-1/2 md:items-start md:max-w-3xl  ">
            <img src="../img/image-hero-desktop.png" class="object-contain h-full hidden md:block" alt="image-hero">
            <img src="../img/image-hero-mobile.png" class="object-contain md:hidden " alt="image-hero">
        </div>
        <div class="hidden w-20 md:block"></div>
        <div class="flex flex-col items-center md:w-1/2 md:max-w-3xl ">

            <div class="flex flex-col w-full p-3 md:h-full ">
                <div class="text-center 
                md:flex md:flex-col md:text-left md:h-full md:justify-center ">

                    <p class="text-center font-bold text-4xl md:text-7xl my-4 font-projeto text-almostblack
                    md:text-left">Make <br class="hidden md:block"> remote work</p>

                    <p class="text-center text-md font-projeto text-mediumgray
                    md:text-left">Get your team in sync, no matter your location. <br class="hidden md:block"> Streamline processes, create team rituals, and watch productivity soar.</p>

                    <button class="rounded-2xl border bg-almostblack mb-8 font-bold text-almostwhite p-3 w-32 mt-8
                    hover:bg-almostwhite hover:text-almostblack hover:border hover:border-almostblack">Learn more</button>
                </div>
                
                <!-- CLIENTES -->
                <div class="flex items-center justify-between w-full md:justify-start">
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
</body>

</html>