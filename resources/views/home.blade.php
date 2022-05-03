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
            }
            h1{
                text-align: center;
            }
            h2{
                margin-left: 2rem;
            }

        </style>
    </head>
    <body>
       <h1>Hello World</h1>

       <h2>Lista Studenti</h2>

       <ul>
            @foreach ($students as $student)
            
                    <li>Nome :{{$student['firstName']}}</li>
                    <li>Cognome: {{$student['lastName']}}</li>
                
            @endforeach
        </ul>
    </body>
</html>
