<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>
        <style>
            body{
                background-color: #A1F4FF;
            }
            a{
                text-decoration: none;
            }
            .home:hover{
                background-color: #BFBFFF;
            }
            .back:hover{
                background-color: #BFBFFF;
            }
            .home{
                position: absolute;
                margin-top: 0px;
                margin-left: 0px;
                width: 50px;
                padding: 7px;
                background-color: #B4B3FF;
            }
            .back{
                position: absolute;
                margin-top: 30px;
                margin-left: 0px;
                width: 50px;
                padding: 7px;
                background-color: #B4B3FF;
            }
            article{
                margin: auto;
                width: 50%;
                border: 3px solid black;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class='home'>
            <a href="http://127.0.0.1:8000/home">home</a>
        </div>
        <div class='back'>
            <a href="http://127.0.0.1:8000/vakken">terug</a>
        </div>
        <article>
            <h1>Cijfers :</h1>
            @foreach ($randoms as $random)
                <div class='grade'>
                    <p> {{ $vak }} : random toets, cijfer = {{ $random }} 
                </div>
            @endforeach
        </article>
    </body>
</html>
