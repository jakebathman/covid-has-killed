<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COVID Has Killed</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Mapbox GL -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

        <style>
            #mapDark, #mapLight {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>

    <body class="h-screen antialiased light:bg-gray-100 light:text-gray-900 dark:bg-gray-900 dark:text-gray-100">
        <div class="flex flex-col justify-between text-xl sm:text-2xl md:text-3xl lg:text-4xl center h-full">

            <div class="flex flex-col text-center items-center justify-center h-full">
                <div class="px-10 py-3 md:px-20 md:py-10">Current deaths (US): 240,782</div>
                <div class="px-10 py-3 md:px-20 md:py-10">COVID-19 in the US has now killed more than the population of <span class="font-bold">Garland, Texas</span>, which has <span class="font-bold">239,928 residents</span>.</div>
                <div class="px-10 py-3 md:px-20 md:py-10">It’s the <span class="font-bold">94<sup>th</sup></span> most populous city in the nation.</div>
            </div>

            <div class="w-full" style="height: 55vh;">
                <div id='mapDark' class="light:hidden"></div>
                <div id='mapLight' class="dark:hidden"></div>
            </div>
        </div>
    </body>

    <script>
        window.matchMedia("(prefers-color-scheme: dark)").addListener((e) => {
            // Fix too-small maps since they were rendered hidden
            mapDark.resize();
            mapLight.resize();
        });

        mapboxgl.accessToken = '{{ config('services.mapbox.token') }}';
        var mapDark = new mapboxgl.Map({
            container: 'mapDark',
            style: 'mapbox://styles/jakebathman/ckhfchage04sw19oi822t9jat',
            center: [-97.910815, 39.93424],
            zoom: 2,
        });

        mapDark.on('load', function () {
            mapDark.flyTo({
                center: [-96.615821, 32.931523],
                zoom: 9,
                speed: 0.3,
                easing(x) {
                    return x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
                },
            });
        });

        var mapLight = new mapboxgl.Map({
            container: 'mapLight',
            style: 'mapbox://styles/jakebathman/ckhfe7d260erk19qkycjbeqcw',
            center: [-97.910815, 39.93424],
            zoom: 2,
        });

        mapLight.on('load', function () {
            mapLight.flyTo({
                center: [-96.615821, 32.931523],
                zoom: 9,
                speed: 0.3,
                easing(x) {
                    return x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
                },
            });
        });

    </script>

</html>
