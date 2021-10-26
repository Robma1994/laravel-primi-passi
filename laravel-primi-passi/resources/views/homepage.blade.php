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
                <h1> {{ $name }} {{ $surname }}</h1>
            </div>
            <h2>Link utili:</h2>
            <div>
                @foreach($links as $link)
                    <ul>
                        <li>
                            <a href=""> {{$link}} </a>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="links">
                <a href="{{ route('home') }}">Homepage</a>
                <a href="{{ route('play') }}">Giochi</a>
            </div>

        </div>
    </body>
</html>
