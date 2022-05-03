<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            header{
                margin: 0;
                height: 80px;
                background-color: lightgray;
                display: flex;
                align-items: center;
            }
            ul{
                display: flex;
                list-style-type: none;
                margin: 0;
            }
            li{
                margin-right: 3rem;
            }
            a{
                text-decoration: none;

            }

        </style>
    </head>
    <body>
        <header>
            <ul>
                @foreach ($links as $link)
                
                        <li> <a href="{{route($link['name'])}}"> {{$link['name']}} </a> </li>
                    
                @endforeach
            </ul>
        </header>
      
    </body>
</html>
