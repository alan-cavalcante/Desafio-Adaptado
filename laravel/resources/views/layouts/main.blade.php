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
    <title>@yield('title')</title>
    <!-- JavaScript -->
    <script>
        function abrirHamburger() {
            let linksnav = document.getElementById("linksNav")
            linksnav.classList.toggle('hidden');
        }

        function abrirFeatures() {
            let features = document.getElementById("features")
            let setasf = document.getElementById("setaFeatures")
            let down = "../img/icon-arrow-down.svg"
            let up = "../img/icon-arrow-up.svg"
            if (setasf.attributes[0].value == down) {
                setasf.attributes[0].value = up
            } else if (setasf.attributes[0].value == up) {
                setasf.attributes[0].value = down
            }
            features.classList.toggle('hidden')
        }

        function abrirCompany() {
            let company = document.getElementById("company")
            let setasc = document.getElementById("setaCompany")
            let down = "../img/icon-arrow-down.svg"
            let up = "../img/icon-arrow-up.svg"
            if (setasc.attributes[0].value == down) {
                setasc.attributes[0].value = up
            } else if (setasc.attributes[0].value == up) {
                setasc.attributes[0].value = down
            }

            company.classList.toggle('hidden')
        }
    </script>
</head>

<body class=" m-0 p-0 min-w-full w-full max-w-full min-h-full h-full max-h-full ">
    @yield('content')
<footer>
</footer>
</body>

</html>