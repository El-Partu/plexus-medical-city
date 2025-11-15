<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karantina&display=swap" rel="stylesheet">

        {{-- <script defer src="httpscdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/echarts@6.0.0/dist/echarts.min.js"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
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
        </script>
    </body>

</html>
