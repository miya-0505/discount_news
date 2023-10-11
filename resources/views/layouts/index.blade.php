<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>discount_news</title>
        <link href="/discount_news/resources/css/index.css">
        <!-- Fonts -->
        <link link="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <x-navigation />
        <div>
            {{ $slot }}
        </div>
    </body>
</html>