<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Laravel</title>
    
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="antialiased">
        <div id="map" style="height:500px; width:800px;"></div>
    
        <form>
            <input type="text" name="address" value="" id="address">
            <button type="button" id="button">検索</button>
        </form>
    
        <ul>
            <li>lat: <span id="lat"></span></li>
            <li>lng: <span id="lng"></span></li>
        </ul>
    
        <script src="{{ asset('/js/map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDkveHRqHWUqMU4CS_isfGbuBrzzoo6v4o&callback=initMap" async defer>
        </script>
    </body>
</html>
