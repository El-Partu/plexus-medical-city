<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Plexus Medical City') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karantina&display=swap" rel="stylesheet">

        <!-- External CSS / JS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4b12d28613.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/echarts@6.0.0/dist/echarts.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Initialize AOS -->
        <script>
            AOS.init();
        </script>

        <!-- Laravel Vite -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>

    <body class="font-sans">
        <header class="relative bg-white">
            <x-navbar />
        </header>

        <main>{{ $slot }}</main>

        <x-footer />
        <script>
            const headers = document.querySelectorAll(".accordion-header");

            headers.forEach((header) => {
                header.addEventListener("click", () => {
                    const openItem = document.querySelector(".accordion-content:not(.hidden)");
                    const currentContent = header.nextElementSibling;

                    if (openItem && openItem !== currentContent) {
                        openItem.classList.add("hidden");
                        openItem.previousElementSibling.querySelector("span").textContent = "+";
                    }

                    currentContent.classList.toggle("hidden");
                    const sign = header.querySelector("span");
                    sign.textContent = currentContent.classList.contains("hidden") ? "+" : "−";
                });
            });
            AOS.init()
        </script>
    </body>

</html>
