<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Primi passi con Laravel</title>

        
        
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Hello world
            </div>

            <div class="links">
                <a href="{{ route('home') }}">Homepage</a>
                <a href="{{ route('play') }}">Giochi</a>
            </div>

        </div>
    </body>
</html>
