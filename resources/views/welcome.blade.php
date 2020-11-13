<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COVID: City Killer</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">


        <!-- Primary Meta Tags -->
        <title>COVID: City Killer</title>
        <meta name="title" content="COVID: City Killer">
        <meta name="description" content="As of today  COVID-19 has killed more than the population of {{ $place->place }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://covidhaskilled.us/">
        <meta property="og:title" content="COVID: City Killer">
        <meta property="og:description" content="As of today, COVID-19 has killed more than the population of {{ $place->place }}">
        <meta property="og:image" content="https://covidhaskilled.us/covidhaskilled.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://covidhaskilled.us/">
        <meta property="twitter:title" content="COVID: City Killer">
        <meta property="twitter:description" content="As of today, COVID-19 has killed more than the population of {{ $place->place }}">
        <meta property="twitter:image" content="https://covidhaskilled.us/covidhaskilled.png">

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
        <div class="absolute right-0 px-2 light:text-gray-500 dark:text-gray-600 pt-1 pr-3 text-sm ">
            Made by <a class="font-bold light:text-blue-300 dark:text-blue-700" href="https://twitter.com/jakebathman">@jakebathman</a>
        </div>
        <div class="flex flex-col justify-between text-xl sm:text-2xl md:text-3xl lg:text-4xl center h-full">

            <div class="flex flex-col text-center items-center justify-evenly" style="height: 55vh;">
                <div class="px-10 md:px-20">Current deaths (US): {{ number_format($currentDeaths) }}</div>
                <div class="px-10 md:px-20">COVID-19 in the US has now killed more than the population of <span class="font-bold">{{ $place->place }}</span>, which has <span class="font-bold">{{ number_format($place->population) }} residents</span>.</div>
                <div class="px-10 md:px-20">It’s the <span class="font-bold">{{ $place->rank }}<sup>{{ $place->rankOrdinal() }}</sup></span> most populous city in the nation.</div>
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
            center: [-97.910815, 39.93424], // center of US
            zoom: 2,
        });

        mapDark.on('load', function () {
            mapDark.flyTo({
                center: [{{ $place->lng }}, {{ $place->lat }}],
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
            center: [-97.910815, 39.93424], // center of US
            zoom: 2,
        });

        mapLight.on('load', function () {
            mapLight.flyTo({
                center: [{{ $place->lng }}, {{ $place->lat }}],
                zoom: 9,
                speed: 0.3,
                easing(x) {
                    return x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
                },
            });
        });

    </script>

</html>
